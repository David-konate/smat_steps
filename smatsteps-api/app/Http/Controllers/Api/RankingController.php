<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;


use App\Models\Ranking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        try {
            $rankings = Ranking::with('user')->get();
            return response()->json([
                'rankings' => $rankings,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }


    public function welcome($currentLevel, Request $request)
    {
        $now = Carbon::now();
        $firstDayOfMonth = $now->firstOfMonth()->toDateTimeString();
        $lastDayOfMonth = $now->lastOfMonth()->toDateTimeString();
        $currentUniver = $request->query('currentUniver');

        try {
            $query = DB::table('rankings')
                ->select('rankings.*', 'users.id', 'users.userImage', 'users.userPseudo')
                ->join('users', 'rankings.user_id', '=', 'users.id')
                ->join('univers', 'rankings.univer', '=', 'univers.univer'); // Assurez-vous que la clé de jointure est correcte

            if ($currentUniver) {
                $query->where('univers.univer', $currentUniver);
            }

            $latestRankings = $query
                ->where('rankings.level', $currentLevel)
                ->orderBy('rankings.created_at', 'desc')
                ->take(5)
                ->get();

            $topRankings = $query
                ->where('rankings.level', $currentLevel)
                ->whereBetween('rankings.created_at', [$firstDayOfMonth, $lastDayOfMonth]) // Filtrer par le mois actuel
                ->orderBy('rankings.result_quiz', 'desc')
                ->take(10)
                ->get();

            return response()->json([
                'latestRankings' => $latestRankings,
                'topRankings' => $topRankings,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }



    public function saveStats(Request $request)
    {
        try {
            $data = $request->validate([
                'result_quiz' => 'required',
                'time_quiz' => 'required',
                'user_id' => 'required',
            ]);

            // Créer une nouvelle entrée dans la table rankings
            $ranking = Ranking::create([
                'result_quiz' => $data['result_quiz'],
                'time_quiz' => $data['time_quiz'],
                'user_id' => $data['user_id'],
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Résultat enregistré avec succès !',
                $ranking,
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }
}
