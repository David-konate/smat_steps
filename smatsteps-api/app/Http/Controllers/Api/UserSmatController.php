<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SmatUser;
use Illuminate\Http\Request;

class UserSmatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
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
    }

    /**
     * Display the specified resource.
     */
    public function showBySmatId(string $id)
    {
        try {
            $smatUsers = SmatUser::where('smat_id', $id)->firstOrFail(); // Utilisez firstOrFail() pour récupérer le premier enregistrement ou générer une erreur 404 si aucun résultat n'est trouvé

            return response()->json([
                'status' => true,
                'smatUsers' => $smatUsers
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => false,
                'message' => 'SmatUser not found'
            ], 404);
        }
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
