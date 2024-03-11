<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SousTheme;

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
    public function show(string $id)
    {
        $sousTheme = SousTheme::findOrFail($id);
        return response()->json($sousTheme);
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
