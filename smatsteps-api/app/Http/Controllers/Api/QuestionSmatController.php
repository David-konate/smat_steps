<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\Question;
use App\Models\QuestionSmat;
use App\Models\Smat;
use App\Models\SmatUser;
use Illuminate\Http\Request;

class QuestionSmatController extends Controller
{

    public function currentQuestion($smatId, $questionId)
    {
        // Récupération des utilisateurs de Smat avec l'identifiant spécifié
        $smatUsers = SmatUser::where('smat_id', $smatId)->get();

        // Vérification s'il y a suffisamment de joueurs pour répondre à la question
        if ($smatUsers->count() < 2) {
            // Retourne une réponse JSON avec un message d'erreur et le code d'erreur 400
            return response()->json([
                'error' => true,
                'message' => 'Il n\'y a pas assez de joueurs pour répondre à la question.',
                'code' => 400
            ]);
        }
        // Recherche de la question Smat avec l'identifiant spécifié
        $question = QuestionSmat::where('smat_id', $smatId)
            ->where('current_question', $questionId)
            ->first();
        // Vérification si la question est trouvée
        if ($question) {
            // Récupération de la question avec ses réponses associées
            $currentQuestion = Question::where('id', $question->question_id)->with('answers')->first();
            // Récupération des réponses associées à la question actuelle
            $currentAnswers = Answer::where('question_id', $question->question_id)->get();
        } else {
            // Retourne une réponse JSON avec un message d'erreur et le code d'erreur 404
            return response()->json([
                'error' => true,
                'message' => 'Question non trouvée.',
                'code' => 404
            ]);
        }
        // Récupération des joueurs de Smat avec l'identifiant spécifié
        $players = SmatUser::where('smat_id', $smatId)->get();
        // Recherche du Smat avec l'identifiant spécifié et chargement des thèmes associés
        $smat = Smat::where('id', $smatId)->with(['theme', 'sousTheme'])->first();
        // Retourne une réponse JSON avec les données récupérées et le code 200 pour succès
        return response()->json([
            'status' => true,
            'currentQuestion' => $currentQuestion,
            'currentAnswers' => $currentAnswers,
            'question' => $question,
            'players' => $players,
            'smat' => $smat,
            'code' => 200
        ]);
    }



    /*;
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
