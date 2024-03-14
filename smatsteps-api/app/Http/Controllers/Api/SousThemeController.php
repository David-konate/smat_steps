<?php

namespace App\Http\Controllers\Api;


use App\Models\Ranking;
use App\Models\SousTheme;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SousThemeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $sousThemes = SousTheme::all();
            return response()->json($sousThemes);
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
            'sousTheme' => 'required|string|max:255',
        ]);

        $sousTheme = SousTheme::create([
            'sousTheme' => $request->sousTheme,
        ]);

        return response()->json($sousTheme, 201);
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
            ->get();

        // Récupérer le thème correspondant
        $sousTheme = SousTheme::findOrFail($id);

        // Retourner les données
        return response()->json([
            'sousTheme' => $sousTheme,
            'topRankings' => $topRankings
        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'sousTheme' => 'required|string|max:255',
        ]);

        $sousTheme = SousTheme::findOrFail($id);
        $sousTheme->update([
            'sousTheme' => $request->sousTheme,
        ]);

        return response()->json($sousTheme, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sousTheme = SousTheme::findOrFail($id);
        $sousTheme->delete();

        return response()->json(null, 204);
    }
}
