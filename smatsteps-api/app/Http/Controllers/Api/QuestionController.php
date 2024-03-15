<?php


namespace App\Http\Controllers\Api;

use App\Models\Answer;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class QuestionController extends Controller
{
    /**
     * Fonction qui récupère les questions en fonction du niveau actuel.
     *
     * @param int $currentLevel Niveau actuel (1, 2 ou 3)
     * @return \Illuminate\Http\JsonResponse Réponse JSON contenant les questions
     */
    public function newGame($currentLevel, Request $request)
    {
        try {
            // Récupérer les thèmes et sous-thèmes spécifiés dans la requête
            $theme = $request->query('theme');
            $sous_theme = $request->query('sousTheme');

            // Convertir les valeurs en tableaux si elles ne sont pas nulles et ne sont pas déjà des tableaux
            if ($theme && !is_array($theme)) {
                $theme = [$theme];
            }
            if ($sous_theme && !is_array($sous_theme)) {
                $sous_theme = [$sous_theme];
            }

            // Initialiser une collection vide pour stocker les questions
            $questions = collect();

            // Nombre de questions à récupérer par défaut
            $count = 20;

            // Ajuster le nombre de questions en fonction du niveau actuel
            switch ($currentLevel) {
                case 1:
                    // Pas de changement, le nombre de questions reste à 20
                    break;
                case 2:
                    // 10 questions de niveau 1 et 10 questions de niveau 2
                    $count = 10;
                    break;
                case 3:
                    // 7 questions de niveau 1, 7 questions de niveau 2 et 6 questions de niveau 3
                    $count = 7;
                    break;
                default:
                    // Pas de changement, le nombre de questions reste à 20
                    break;
            }

            // Niveaux à récupérer
            $levelsToRetrieve = range(1, $currentLevel);

            // Récupérer les questions pour chaque niveau spécifié
            foreach ($levelsToRetrieve as $lvl) {
                $query = Question::with(['answers', 'theme'])
                    ->select('questions.*', 'categories.category', 'levels.id', 'answers.answer')
                    ->join('categories', 'questions.category_id', '=', 'categories.id')
                    ->join('levels', 'questions.level_id', '=', 'levels.id')
                    ->leftJoin('answers', 'questions.id', '=', 'answers.question_id')
                    ->where('questions.level_id', $lvl);

                // Ajouter un filtre par thèmes si des thèmes sont spécifiés
                if ($theme) {
                    $query->whereIn('questions.theme_id', $theme);
                }

                // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                if ($sous_theme) {
                    $query->whereIn('questions.sous_theme_id', $sous_theme);
                }

                $levelQuestions = $query->inRandomOrder()
                    ->limit($count)
                    ->get();

                $questions = $questions->merge($levelQuestions);
            }

            // Mélanger aléatoirement les réponses de chaque question
            $questions->each(function ($question) {
                $question->answers = $question->answers->shuffle();
            });

            // Mélanger aléatoirement le contenu du jeu
            $questions = $questions->shuffle();

            // Retourner les questions sous forme de réponse JSON
            return response()->json($questions);
        } catch (\Throwable $e) {
            // En cas d'erreur, retourner une réponse JSON d'erreur
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500); // Utiliser le code 500 pour les erreurs internes du serveur
        }
    }







    public function index()
    {
        try {
            $questions = Question::with('category', 'answers')->get();

            return response()->json($questions);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' =>  $e->getMessage(),
            ], 403);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'question' => 'required',
                'level_id' => 'required',
                'category_id' => 'required',
                'sous_theme_id' => 'required',
                'user_id' => 'required',
                'image_question' => 'nullable|image|mimes:jpeg,png,jpg,gif',
                'answers' => 'required|array|min:1', // Assurez-vous qu'il y a au moins une réponse

            ]);


            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur de validation',
                    'errors' => $validator->errors(),
                ], 401);
            }

            // Logique de chargement de l'image de la question
            $filename = null;
            if ($request->hasFile('image_question')) {
                $filenameWithExt = $request->file('image_question')->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image_question')->getClientOriginalExtension();
                $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                $request->file('image_question')->storeAs('public/uploads', $filename);
            }

            // Création de la question
            $question = Question::create([
                'question' => request('question'),
                'level_id' => request('level_id'),
                'category_id' => request('category_id'),
                'sous_theme_id' => request('sous_theme_id'),
                'user_id' => request('user_id'),
                'image_question' => $filename,

            ]);

            // Ajout des réponses à la question nouvellement créée
            $answers = [];
            foreach (request('answers') as $answerData) {
                $answers[] = new Answer([
                    'answerText' => $answerData['answerText'],
                    'is_correct' => $answerData['is_correct'] ? 1 : 0, // Convertir en entier
                ]);
            }
            $question->answers()->saveMany($answers);


            return response()->json([
                'data' => $question,
                'status' => true,
                'message' => 'Question créée avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création de la question : ' . $e->getMessage(),
            ], 403);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $question = Question::with('category', 'answers')->findOrFail($id);

            return response()->json($question);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' =>  $e->getMessage(),
            ], 403);
        }
    }
    public function random()
    {
        try {
            // Obtenir une question aléatoire avec les réponses et la catégorie
            $randomQuestion = Question::with(['category', 'answers'])
                ->inRandomOrder()
                ->first();

            if (!$randomQuestion) {
                return response()->json([
                    'status' => false,
                    'message' => 'Aucune question disponible.',
                ], 404);
            }

            // Mélanger aléatoirement les réponses de la question
            $randomQuestion->answers = $randomQuestion->answers->shuffle();

            // Retourner la question aléatoire avec les réponses et la catégorie en tant que réponse JSON
            return response()->json($randomQuestion);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $questionId)
    {
        try {
            // Validation des données
            $validator = Validator::make($request->all(), [
                'question' => 'required|min:1|string',
                'level_id' => 'required|integer',
                'category_id' => 'required|integer',
                'sous_theme_id' => 'required',
                'user_id' => 'required',
                'answers' => 'required|array|min:1', // Assurez-vous qu'il y a au moins une réponse

            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400);
            }

            // Récupération de la question
            $question = Question::findOrFail($questionId);

            // Logique de chargement d'image
            if ($request->hasFile('image_question')) {
                $filenameWithExt = $request->file('image_question')->getClientOriginalName();
                $filenameWithoutExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('image_question')->getClientOriginalExtension();
                $filename = $filenameWithoutExt . '_' . time() . '.' . $extension;
                $request->file('image_question')->storeAs('public/uploads', $filename);

                // Mise à jour de l'image liée à la question
                $question->image_question = $filename;
            }

            // Mise à jour des données de la question
            $question->update([
                'question' => request('question'),
                'level_id' => request('level_id'),
                'category_id' => request('category_id'),
                'sous_theme_id' => request('sous_theme_id'),
                'user_id' => request('user_id'),
                'image_question' => $filename,
            ]);

            // Mise à jour des réponses de la question
            $answers = [];
            foreach ($request->answers as $answerData) {
                $answers[] = [
                    'answerText' => $answerData['answerText'],
                    'is_correct' => $answerData['is_correct'] ? 1 : 0, // Convertir en entier
                ];
            }
            $question->answers()->delete(); // Supprimer les réponses existantes
            $question->answers()->createMany($answers);

            return response()->json([
                'status' => true,
                'message' => 'Question et réponses mises à jour avec succès',
                'data' => $question
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la mise à jour de la question et des réponses : ' . $e->getMessage(),
            ], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
