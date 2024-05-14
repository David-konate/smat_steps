<?php


namespace App\Http\Controllers\Api;

use App\Models\Smat;

use App\Models\User;
use App\Models\Answer;
use App\Models\Question;
use App\Models\SmatUser;
use App\Models\QuestionSmat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;


class QuestionController extends Controller
{
    /**
     * Fonction qui récupère les questions en fonction du niveau actuel.
     *
     * @param int $currentLevel Niveau actuel (1, 2 ou 3)
     * @return \Illuminate\Http\JsonResponse Réponse JSON contenant les questions
     */


    public function newRankedGame($currentLevel, Request $request)
    {
        try {
            // Récupérer les thèmes et sous-thèmes spécifiés dans la requête
            $theme = $request->query('theme');
            $sous_theme = $request->query('sousTheme');

            // Convertir les valeurs en tableaux si elles ne sont pas nulles et ne sont pas déjà des tableaux
            $theme = is_array($theme) ? $theme : ($theme ? [$theme] : null);
            $sous_theme = is_array($sous_theme) ? $sous_theme : ($sous_theme ? [$sous_theme] : null);

            // Initialiser une variable pour stocker les questions
            $questions = collect();
            $countLevel1 = 0;
            $countLevel2 = 0;
            $countLevel3 = 0;
            switch ($currentLevel) {
                case 1:
                    // Récupérer 20 questions de niveau 1
                    $questions = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 1)
                        ->limit(20);
                    if ($theme) {
                        $questions->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questions->whereIn('sous_theme_id', $sous_theme);
                    }

                    $countLevel1 = 20;

                    break;
                case 2:
                    // Récupérer 10 questions de niveau 1 et 10 questions de niveau 2
                    $questionsLevel1 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 1)
                        ->limit(10);
                    if ($theme) {
                        $questionsLevel1->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel1->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questionsLevel2 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 2)
                        ->limit(10);
                    if ($theme) {
                        $questionsLevel2->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel2->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questions = $questionsLevel1->union($questionsLevel2);
                    $countLevel1 = 10;
                    $countLevel2 = 10;
                    break;
                case 3:
                    // Récupérer 7 questions de niveau 1, 7 questions de niveau 2 et 6 questions de niveau 3
                    $questionsLevel1 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 1)
                        ->limit(7);
                    if ($theme) {
                        $questionsLevel1->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel1->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questionsLevel2 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 2)
                        ->limit(7);
                    if ($theme) {
                        $questionsLevel2->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel2->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questionsLevel3 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 3)
                        ->limit(6);
                    if ($theme) {
                        $questionsLevel3->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel3->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questions = $questionsLevel1->union($questionsLevel2)->union($questionsLevel3);
                    $countLevel1 = 7;
                    $countLevel2 = 7;
                    $countLevel3 = 6;
                    break;
                default:
                    // Récupérer 10 questions de niveau 1 et 10 questions de niveau 2
                    $questionsLevel1 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 1)
                        ->limit(5);
                    $questionsLevel2 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 2)
                        ->limit(4);
                    $questions = $questionsLevel1->union($questionsLevel2);
                    $countLevel1 = 5;
                    $countLevel2 = 4;
                    break;
            }

            // Ajouter des conditions pour les thèmes et sous-thèmes si disponibles
            if (!is_null($theme)) {
                $questions->whereIn('theme_id', $theme);
            }
            if (!is_null($sous_theme)) {
                $questions->whereIn('sous_theme_id', $sous_theme);
            }

            // Exécuter la requête et récupérer les questions
            $questions = $questions->inRandomOrder()->get();

            // Mélanger l'ordre des réponses à l'intérieur de chaque question
            $questions->each(function ($question) {
                $question->answers->shuffle();
            });

            // Retourner les questions sous forme de réponse JSON
            return response()->json([
                'questions' => $questions,
                'countLevel1' => $countLevel1,
                'countLevel2' => $countLevel2,
                'countLevel3' => $countLevel3,
            ]);
        } catch (\Throwable $e) {
            // Logguer l'erreur pour le débogage
            Log::error('Erreur lors de la récupération des questions: ' . $e->getMessage());

            // Retourner une réponse JSON d'erreur
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la récupération des questions. Veuillez réessayer ultérieurement.',
            ], 500); // Utiliser le code 500 pour les erreurs internes du serveur
        }
    }


    public function newPrivateGame($currentLevel, Request $request)
    {
        try {
            // Récupérer les thèmes et sous-thèmes spécifiés dans la requête
            $theme = $request->query('theme');
            $sous_theme = $request->query('sousTheme');
            $user1 = User::find($request->input('user1'));
            $user2 = User::find($request->input('user2'));

            // Convertir les valeurs en tableaux si elles ne sont pas nulles et ne sont pas déjà des tableaux
            $theme = is_array($theme) ? $theme : ($theme ? [$theme] : null);
            $sous_theme = is_array($sous_theme) ? $sous_theme : ($sous_theme ? [$sous_theme] : null);

            // Initialiser une variable pour stocker les questions
            $questions = collect();
            $countLevel1 = 0;
            $countLevel2 = 0;
            $countLevel3 = 0;
            switch ($currentLevel) {

                case 1:
                    // Récupérer 20 questions de niveau 1
                    $questions = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 1)
                        ->limit(10);
                    if ($theme) {
                        $questions->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questions->whereIn('sous_theme_id', $sous_theme);
                    }

                    $countLevel1 = 20;

                    break;
                case 2:
                    // Récupérer 10 questions de niveau 1 et 10 questions de niveau 2
                    $questionsLevel1 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 1)
                        ->limit(5);
                    if ($theme) {
                        $questionsLevel1->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel1->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questionsLevel2 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 2)
                        ->limit(5);
                    if ($theme) {
                        $questionsLevel2->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel2->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questions = $questionsLevel1->union($questionsLevel2);

                    break;
                case 3:
                    // Récupérer 7 questions de niveau 1, 7 questions de niveau 2 et 6 questions de niveau 3
                    $questionsLevel1 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 1)
                        ->limit(3);
                    if ($theme) {
                        $questionsLevel1->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel1->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questionsLevel2 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 2)
                        ->limit(3);
                    if ($theme) {
                        $questionsLevel2->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel2->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questionsLevel3 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 3)
                        ->limit(4);
                    if ($theme) {
                        $questionsLevel3->whereIn('theme_id', $theme);
                    }
                    // Ajouter un filtre par sous-thèmes si des sous-thèmes sont spécifiés
                    if ($sous_theme) {
                        $questionsLevel3->whereIn('sous_theme_id', $sous_theme);
                    }

                    $questions = $questionsLevel1->union($questionsLevel2)->union($questionsLevel3);
                    $countLevel1 = 7;
                    $countLevel2 = 7;
                    $countLevel3 = 6;
                    break;
                default:
                    // Récupérer 10 questions de niveau 1 et 10 questions de niveau 2
                    $questionsLevel1 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 1)
                        ->limit(10);
                    $questionsLevel2 = Question::with(['theme', 'sousTheme', 'answers'])
                        ->where('level_id', 2)
                        ->limit(10);
                    $questions = $questionsLevel1->union($questionsLevel2);
                    $countLevel1 = 10;
                    $countLevel2 = 10;
                    break;
            }

            // Ajouter des conditions pour les thèmes et sous-thèmes si disponibles
            if (!is_null($theme)) {
                $questions->whereIn('theme_id', $theme);
            }
            if (!is_null($sous_theme)) {
                $questions->whereIn('sous_theme_id', $sous_theme);
            }

            // Exécuter la requête et récupérer les questions
            $questions = $questions->inRandomOrder()->get();

            // Créez le Smat avec les données appropriées

            // Créer le Smat avec les données appropriées
            try {
                $smat = Smat::create([
                    'theme_id' => $theme ? $theme[0] : null, // Sélectionnez le premier thème s'il existe
                    'sous_theme_id' => $sous_theme ? $sous_theme[0] : null, // Sélectionnez le premier sous-thème s'il existe
                    'level_id' => $currentLevel,
                    'status' => 1,
                    'totals_point' => $countLevel1 * 2 + $countLevel2 * 4 + $countLevel3 * 6
                ]);
            } catch (\Throwable $e) {
                // Logguer l'erreur
                Log::error('Erreur lors de la création du Smat: ' . $e->getMessage());
                // Retourner une réponse JSON d'erreur avec des détails
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur lors de la création du Smat. Veuillez réessayer ultérieurement.',
                    'error' => $e->getMessage(),
                ], 500); // Utiliser le code 500 pour les erreurs internes du serveur
            }

            // Création des entrées user_smat pour chaque utilisateur dans un bloc try...catch
            try {
                $userSmatEntries = [];
                foreach ([$user1, $user2] as $user) {
                    $userSmatEntries[] = [
                        'user_id' => $user->id,
                        'smat_id' => $smat->id,
                        'result_smat' => 0, // Vous pouvez définir la valeur par défaut ici si nécessaire
                    ];
                }
                SmatUser::insert($userSmatEntries);
            } catch (\Throwable $e) {
                // Logguer l'erreur
                Log::error('Erreur lors de la création des entrées user_smat: ' . $e->getMessage());
                // Retourner une réponse JSON d'erreur avec des détails
                return response()->json([
                    'status' => false,
                    'message' => 'Erreur lors de la création des entrées user_smat. Veuillez réessayer ultérieurement.',
                    'error' => $e->getMessage(),
                ], 500); // Utiliser le code 500 pour les erreurs internes du serveur
            }


            // Associer les questions au Smat et mélanger les réponses
            $questions->shuffle();
            $index = 0;
            foreach ($questions as $question) {
                $questionSmat = new QuestionSmat([
                    'question_id' => $question->id,
                    'smat_id' => $smat->id,
                    'status' => 1,
                    'current_question' => $index++
                ]);
                $questionSmat->save();
            }

            // Retourner un message de réussite
            return response()->json([
                'status' => true,
                'message' => 'Partie créée, attente de la réponse de votre ami.',
            ]);
        } catch (\Throwable $e) {
            // Logguer l'erreur pour le débogage
            Log::error('Erreur lors de la création du Smat et de la récupération des questions: ' . $e->getMessage());

            // Retourner une réponse JSON d'erreur avec des détails
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la création du Smat et de la récupération des questions. Veuillez réessayer ultérieurement.',
                'error' => $e->getMessage(),
            ], 500); // Utiliser le code 500 pour les erreurs internes du serveur
        }
    }




    private function getQuestionsLimit($currentLevel)
    {
        switch ($currentLevel) {
            case 1:
                return 12;
            case 2:
                return 12;
            case 3:
                return 15;
            default:
                return 12;
        }
    }

    private function getQuestionsCount($currentLevel, $level)
    {
        return $currentLevel === $level ? $this->getQuestionsLimit($currentLevel) : 0;
    }


    public function index()
    {
        try {
            $questions = Question::with('category', 'level', 'theme', 'sousTheme', 'answers')->get();

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
