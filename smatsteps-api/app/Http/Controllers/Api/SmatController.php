<?php

namespace App\Http\Controllers\Api;



use App\Http\Controllers\Controller;
use App\Models\Smat;

class SmatController extends Controller
{
    public function acceptDual($smatId)
    {
        try {
            // Utilisation de la méthode findOrFail pour rechercher l'élément par ID
            $smat = Smat::findOrFail($smatId);

            // Mise à jour du statut de l'élément
            $smat->update(['status' => 2]);

            // Réponse JSON en cas de succès
            return response()->json([
                'status' => true,
                'message' => 'Duel accepté'
            ], 200);
        } catch (\Exception $e) { // Utilisation de Exception plutôt que Throwable
            // Réponse JSON en cas d'erreur
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de l\'acceptation du duel : ' . $e->getMessage(),
            ], 403);
        }
    }


    public function destroy($smatId)
    {
        try {

            $smat = Smat::findOrFail($smatId);

            $smat->delete();

            return response()->json([
                'status' => true,
                'message' => 'Partie privée supprimé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la suppression du smat : ' . $e->getMessage(),
            ], 403);
        }
    }
}
