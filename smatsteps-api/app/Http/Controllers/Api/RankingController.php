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

    public function collectionTheme()
    {
        // // Récupérer le nombre de sous-thèmes existants et leur nom
        // $sousThemesData = SousTheme::select('id', 'sous_theme')->get();

        // // Compter le nombre total de sous-thèmes
        // $countSousThemes = $sousThemesData->count();

        // // Récupérer les données des sous-thèmes
        // $sousThemes = $sousThemesData->toArray();

        // // Récupérez tous les classements avec leurs sous-thèmes associés
        // $rankings = Ranking::with('sousTheme.theme')->get();

        // // Utilisez la méthode 'pluck' pour extraire uniquement les sous-thèmes de chaque objet Ranking
        // $sousThemesRanking = $rankings->pluck('sousTheme.theme');

        // // Comptez le nombre d'occurrences de chaque ID de thème
        // $counts = $sousThemesRanking->groupBy('id')
        //     ->map
        //     ->count();

        // // Récupérez les images de thème et les noms de thème
        // $themeData = $sousThemesRanking->map(function ($theme) {
        //     return [
        //         'id' => $theme->id,
        //         'theme_image' => $theme->theme_image,
        //         'theme' => $theme->theme, // Ajout du nom du thème
        //     ];
        // });

        // // Formattez les résultats dans un tableau associatif avec l'ID du thème, le nombre d'occurrences, l'image du thème et le nom du thème
        // $result = [];
        // foreach ($counts as $themeId => $count) {
        //     $result[] = [
        //         'theme_id' => $themeId,
        //         'count_them' => $count,
        //         'theme_image' => $themeData->where('id', $themeId)->first()['theme_image'],
        //         'theme' => $themeData->where('id', $themeId)->first()['theme'], // Récupération du nom du thème
        //     ];
        // }

        // // Retournez le tableau associatif contenant les résultats des classements, les données des sous-thèmes et le nombre total de sous-thèmes
        // return [
        //     'themes' => $result,
        //     'sousThemes' => $sousThemes,

        // ];
    }
    public function topCollection()
    {
        // Récupérer les données des sous-thèmes avec leur thème associé
        $sousThemes = SousTheme::with('theme')->select('id', 'sous_theme', 'sous_theme_image')->get();

        // Récupérer les données de classement avec les thèmes et les sous-thèmes associés
        $rankings = Ranking::with(['theme', 'sousTheme'])->get();

        // Comptez le nombre d'occurrences de chaque ID de thème
        $counts = $rankings->groupBy('theme_id')->map->count();

        // Récupérer les images de thème et les noms de thème
        $themesData = Theme::whereIn('id', $counts->keys())->get()->keyBy('id');

        // Formattez les résultats dans un tableau associatif avec l'ID du thème, le nombre d'occurrences, l'image du thème et le nom du thème
        $result = [];
        foreach ($counts as $themeId => $count) {
            $theme = $themesData->get($themeId);
            $result[] = [
                'theme_id' => $themeId,
                'count_theme' => $count,
                'theme_image' => $theme ? $theme->theme_image : null,
                'theme' => $theme ? $theme->theme : null,
            ];
        }



        // Sélectionner trois sous-thèmes aléatoires
        $randoms = $sousThemes->shuffle()->take(5);


        // Retournez le tableau associatif contenant les résultats des classements, les données des sous-thèmes, le nombre total de sous-thèmes et les données aléatoires
        return [
            'themes' => $result,
            'sousThemes' => $sousThemes,
            'randoms' => $randoms,
        ];
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