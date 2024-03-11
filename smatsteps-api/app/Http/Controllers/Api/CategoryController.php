<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Afficher toutes les catégories
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
    }

    // Afficher une catégorie spécifique
    public function show($id)
    {
        $category = Category::findOrFail($id);
        return response()->json($category);
    }

    // Créer une nouvelle catégorie
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'category' => $request->category,
        ]);

        return response()->json($category, 201);
    }

    // Mettre à jour une catégorie existante
    public function update(Request $request, $id)
    {
        $request->validate([
            'category' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category' => $request->category,
        ]);

        return response()->json($category, 200);
    }

    // Supprimer une catégorie
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return response()->json(null, 204);
    }
}
