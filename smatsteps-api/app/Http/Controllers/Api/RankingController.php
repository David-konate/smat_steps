<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;


use App\Models\Ranking;
use App\Models\SousTheme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Theme;

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
                ->select('rankings.*', 'users.id', 'users.user_image', 'users.user_pseudo')
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

    public function topCollection()
    {
        // Récupérer les données de classement avec les thèmes et les sous-thèmes associés
        $rankings = Ranking::with(['theme', 'sousTheme'])->get();

        // Compter le nombre d'occurrences de chaque ID de thème
        $themeCounts = $rankings->groupBy('theme_id')->map->count();

        // Compter le nombre d'occurrences de chaque ID de sous-thème
        $sousThemeCounts = $rankings->groupBy('sous_theme_id')->map->count();

        // Récupérer les thèmes les plus utilisés
        $topThemes = $themeCounts->sortDesc()->keys()->take(5);

        // Récupérer les sous-thèmes les plus utilisés
        $topSousThemes = $sousThemeCounts->sortDesc()->keys()->take(5);

        // Récupérer les images et les noms des thèmes
        $themesData = Theme::whereIn('id', $topThemes)->get()->keyBy('id');

        // Récupérer les sous-thèmes les plus utilisés avec leurs thèmes associés
        $topSousThemesData = SousTheme::with('theme')
            ->whereIn('id', $topSousThemes)
            ->get();

        // Sélectionner trois sous-thèmes aléatoires
        $randomSousThemes = SousTheme::inRandomOrder()->limit(5)->get();

        // Formattez les résultats dans un tableau associatif
        $result = [
            'topThemes' => $themesData,
            'topSousThemes' => $topSousThemesData,
            'randomSousThemes' => $randomSousThemes,
        ];

        return $result;
    }







    public function saveStats(Request $request)
    {
        try {
            $data = $request->validate([
                'result_quiz' => 'required',
                'time_quiz' => 'required',
                'user_id' => 'required',
                'sous_theme_id' => 'nullable|integer', // Assurez-vous que sous_theme_id est un entier ou null
                'theme_id' => 'required|integer', // Assurez-vous que theme_id est un entier
                'level' => 'required',
            ]);

            // Créer une nouvelle entrée dans la table rankings
            $ranking = Ranking::create([
                'result_quiz' => $data['result_quiz'],
                'time_quiz' => $data['time_quiz'],
                'user_id' => $data['user_id'],
                'level' => $data['level'],
                'sous_theme_id' => $data['sous_theme_id'], // Ajouter la sauvegarde de sous_theme_id
                'theme_id' => $data['theme_id'], // Ajouter la sauvegarde de theme_id
            ]);

            return response()->json([
                'status' => true,
                'message' => 'Résultat enregistré avec succès !',
                'ranking' => $ranking, // Envoyer l'objet ranking dans la réponse JSON
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }
}
