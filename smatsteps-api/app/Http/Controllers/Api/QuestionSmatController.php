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
        $smatUsers = SmatUser::where('smat_id', $smatId)->get();

        if ($smatUsers->count() < 2) {
            return response()->json([
                'error' => true,
                'message' => 'Il n\'y a pas assez de joueurs pour répondre à la question.',
                'code' => 400 // Utilisation du code d'erreur 400 Bad Request
            ]);
        }

        $player1 = $smatUsers->first();
        $player2 = $smatUsers->last();

        // if (abs($player1->current_question - $player2->current_question) >= 1) {
        //     return response()->json([
        //         'error' => true,
        //         'message' => 'Ce n\'est pas encore votre tour de jouer.',
        //         'code' => 409 // Utilisation du code d'erreur 409 Conflict
        //     ]);
        // } else {
        $question = QuestionSmat::where('smat_id', $smatId)
            ->where('current_question', $questionId)
            ->first();

        if ($question) {
            // Récupérer la question avec ses réponses associées
            $currentQuestion = Question::where('id', $question->question_id)->with('answers')->first();
            // Récupérer les réponses associées à la question actuelle
            $currentAnswers = Answer::where('question_id', $question->question_id)->get();
        } else {
            return response()->json([
                'error' => true,
                'message' => 'Question non trouvée.',
                'code' => 404 // Utilisation du code d'erreur 404 Not Found
            ]);
        }
        try {
            $players = SmatUser::where('smat_id', $smatId);
        } catch (\Throwable $th) {
            return response()->json([
                'error' => true,
                'message' => 'Joueurs non trouvées.',
                'code' => 404 // Utilisation du code d'erreur 404 Not Found
            ]);
        }
        $smat = Smat::where('id', $smatId)->with(['theme', 'sousTheme'])->first();


        return response()->json([
            'status' => true,
            'currentQuestion' => $currentQuestion,
            'currentAnswers' => $currentAnswers,
            'question' => $question,
            'players' => $players,
            'smat' => $smat,
            'code' => 200
        ]);
        // }
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
