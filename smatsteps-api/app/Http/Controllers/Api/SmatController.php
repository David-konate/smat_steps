<?php

namespace App\Http\Controllers\Api;


use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\QuestionSmat;
use App\Models\Smat;
use App\Models\SmatUser;
use App\Models\UserSmat;

class SmatController extends Controller
{

    // public function finish($smatId)
    // {
    //     try {
    //         // Récupérer le Smat correspondant à l'ID donné
    //         $smat = Smat::where('smat_id', $smatId)->first();

    //         if (!$smat) {
    //             // Gérer le cas où le Smat n'est pas trouvé
    //             throw new \Exception("Smat not found");
    //         }

    //         // Récupérer tous les utilisateurs associés à ce Smat
    //         $smatUsers = SmatUser::where('smat_id', $smatId)->get();

    //         // Initialiser un drapeau pour indiquer si tous les utilisateurs ont terminé toutes les questions
    //         $allUsersFinished = true; // Supposons que tous les utilisateurs ont terminé toutes les questions par défaut

    //         // Parcourir chaque utilisateur trouvé dans la liste des utilisateurs associés au Smat
    //         foreach ($smatUsers as $smatUser) {

    //             // Vérifie si l'utilisateur actuel a atteint la dernière question du Smat.
    //             // Nous comparons la question actuelle de l'utilisateur avec la longueur totale du Smat moins un.
    //             if ($smatUser->current_question < $smat->length() - 1) {
    //                 // Met à jour le drapeau pour indiquer que tous les utilisateurs n'ont pas encore terminé.
    //                 $allUsersFinished = false;
    //                 // Nous sortons de la boucle car nous avons trouvé au moins un utilisateur qui n'a pas terminé toutes les questions.
    //                 break;
    //             }
    //         }
    //         // Si tous les utilisateurs ont terminé toutes les questions, mettre à jour l'état du Smat en le marquant comme terminé (status 3)
    //         if ($allUsersFinished) {
    //             $smat->update(['status' => 3]);

    //             // Supprimer toutes les relations de la table QuestionSmats associées à ce Smat
    //             QuestionSmat::where('smat_id', $smatId)->delete();

    //             // Réponse JSON en cas de succès
    //             return response()->json([
    //                 'status' => true,
    //                 'message' => 'Smat terminé avec succès',
    //             ], 200);
    //         } else {
    //             // Réponse JSON indiquant que tous les utilisateurs n'ont pas terminé
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => 'Tous les utilisateurs n\'ont pas terminé leurs questions',
    //             ], 400);
    //         }
    //     } catch (\Exception $e) {

    //         // Réponse JSON en cas d'erreur
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Erreur lors de la fin du Smat : ' . $e->getMessage(),
    //         ], 500);
    //     }
    // }




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
                'message' => 'Duel accepté',
                'smat' => $smat
            ], 200);
        } catch (\Exception $e) { // Utilisation de Exception plutôt que Throwable
            // Réponse JSON en cas d'erreur
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de l\'acceptation du duel : ' . $e->getMessage(),
            ], 403);
        }
    }

    // public function saveResult($smatId, $userId, Request $request)
    // {

    //     try {
    //         // Recherche de l'utilisateur Smat par ID utilisateur et ID Smat
    //         $userSmat = SmatUser::where('user_id', $userId)->where('smat_id', $smatId)->firstOrFail();
    //         // Mise à jour du résultat Smat et du numéro de question actuel
    //         $userSmat->update([
    //             'result_smat' => $userSmat->result_smat + $request->newScore,
    //             'current_question' => $userSmat->current_question + 1,
    //             'current_points_max' => $userSmat->current_points_max + $request->newCurrentPointsMax
    //         ]);

    //         // Réponse JSON en cas de succès
    //         return response()->json([
    //             'status' => true,
    //             'message' => 'Réponse enregistrée',
    //         ], 200);
    //     } catch (\Throwable $e) {
    //         // Réponse JSON si le modèle n'est pas trouvé
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Smat ou utilisateur introuvable :' . $e->getMessage(),
    //         ], 404);
    //     } catch (\Exception $e) {
    //         // Réponse JSON en cas d'erreur générale
    //         return response()->json([
    //             'status' => false,
    //             'message' => 'Erreur lors de la sauvegarde de la réponse : ' . $e->getMessage(),
    //         ], 500);
    //     }
    // }

    public function saveResult($smatId, $userId, Request $request)
    {
        try {
            // Recherche de l'utilisateur Smat par ID utilisateur et ID Smat
            $userSmat = SmatUser::where('user_id', $userId)->where('smat_id', $smatId)->firstOrFail();

            // Mise à jour du résultat Smat et du numéro de question actuel
            $userSmat->update([
                'result_smat' => $userSmat->result_smat + $request->newScore,
                'current_question' => $userSmat->current_question + 1,
                'current_points_max' => $userSmat->current_points_max + $request->newCurrentPointsMax
            ]);

            // Vérifier si tous les utilisateurs ont terminé toutes les questions
            $allUsersFinished = true;
            $smatUsers = SmatUser::where('smat_id', $smatId)->get();
            $smat = Smat::where('smat_id', $smatId)->first();

            foreach ($smatUsers as $smatUser) {
                if ($smatUser->current_question <= $smat->length() - 1) {
                    $allUsersFinished = false;
                    break;
                }
            }

            // Si tous les utilisateurs ont terminé toutes les questions,
            // mettre à jour l'état du Smat en le marquant comme terminé (status 3)
            if ($allUsersFinished) {
                $smat->update(['status' => 3]);
                QuestionSmat::where('smat_id', $smatId)->delete();

                return response()->json([
                    'status' => true,
                    'message' => 'Smat terminé avec succès',
                ], 200);
            } else {
                return response()->json([
                    'status' => false,
                    'message' => 'Réponse enregistrée',
                ], 200);
            }
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Smat ou utilisateur introuvable :' . $e->getMessage(),
            ], 404);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la sauvegarde de la réponse : ' . $e->getMessage(),
            ], 500);
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
