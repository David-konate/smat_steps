<?php

namespace App\Http\Controllers\Api;

use App\Models\Level;
use App\Models\Theme;
use App\Models\Ranking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $themes = Theme::all();
            return response()->json($themes);
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
        $request->validate([
            'theme' => 'required|string|max:255',
        ]);

        $theme = Theme::create([
            'theme' => $request->theme,
        ]);

        return response()->json($theme, 201);
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function show(string $id, Request $request)
    {
        $currentLevel = $request->query('currentLevel');

        // Récupérer les trois meilleurs résultats de la table Rankings avec les utilisateurs associés
        $topRankings = Ranking::with('user')
            ->where('theme_id', $id)
            ->where('level', $currentLevel)
            ->orderBy('result_quiz', 'desc')
            ->limit(3)
            ->get();

        // Récupérer le thème correspondant
        $theme = Theme::findOrFail($id);

        // Retourner les données
        return response()->json([
            'theme' => $theme,
            'topRankings' => $topRankings
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'theme' => 'required|string|max:255',
        ]);

        $theme = Theme::findOrFail($id);
        $theme->update([
            'theme' => $request->theme,
        ]);

        return response()->json($theme, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $theme = Theme::findOrFail($id);
        $theme->delete();

        return response()->json(null, 204);
    }
}
