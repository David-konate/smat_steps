<?php


namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Level;

class LevelController extends Controller
{
    // Afficher tous les niveaux
    public function index()
    {
        $levels = Level::all();
        return response()->json($levels);
    }

    // Afficher un niveau spécifique
    public function show($id)
    {
        $level = Level::findOrFail($id);
        return response()->json($level);
    }

    // Créer un nouveau niveau
    public function store(Request $request)
    {
        $level = Level::create([]);

        return response()->json($level, 201);
    }

    // Supprimer un niveau
    public function destroy($id)
    {
        $level = Level::findOrFail($id);
        $level->delete();

        return response()->json(null, 204);
    }
}
