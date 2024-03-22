<?php

namespace App\Http\Controllers\Api;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Friend;
use App\Models\Ranking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function addFriend(User $friend, User $user)
    {
        // Vérifiez si l'ami n'est pas déjà ajouté
        if (!$user->isFriendWith($friend)) {
            // Ajoutez l'ami à la liste des amis de l'utilisateur actuel
            $user->friends()->attach($friend->id);

            // Ajoutez également l'utilisateur actuel à la liste d'amis de l'ami
            $friend->friends()->attach($user->id);
        }
    }



    /**
     * Store a newly created resource in storage.
     */
    /**
     * Display the specified resource.
     */

    public function friendshipExists($user_id, $friend_id)
    {
        try {
            // Vérifie si une amitié existe entre les deux utilisateurs, peu importe l'ordre
            $friendshipExists = Friend::where(function ($query) use ($user_id, $friend_id) {
                $query->where('user_id', $user_id)
                    ->where('friend_id', $friend_id);
            })
                ->orWhere(function ($query) use ($user_id, $friend_id) {
                    $query->where('user_id', $friend_id)
                        ->where('friend_id', $user_id);
                })
                ->where('status', 2)
                ->exists();

            return response()->json([
                'status' => true,
                'friend' => $friendshipExists,
            ], 200);
        } catch (\Throwable $e) {
            // Gérez les erreurs ici, par exemple en enregistrant les erreurs dans les logs
            // ou en renvoyant une réponse d'erreur appropriée
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la vérification de l\'amitié : ' . $e->getMessage(),
            ], 500);
        }
    }

    public function show($user, Request $request)
    {
        $currentLevel = $request->query('currentLevel');
        $currentTheme = $request->query('currentTheme');
        $currentSousTheme = $request->query('currentSousTheme');

        try {
            $user = User::with('friends')->findOrFail($user);

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Utilisateur non trouvé'
                ], 404);
            }

            $rankings = Ranking::where('user_id', $user->id)
                ->where('level', $currentLevel)
                ->with(['theme', 'sousTheme'])
                ->orderBy('rankings.result_quiz', 'asc');

            $rankings = $rankings->orderByDesc('result_quiz')->get();
            // $latestReview = $user->receiverReviews->first(); // Assuming reviews are ordered by creation date
            return response()->json([
                'status' => true,
                'user' => $user,
                'rankings' => $rankings // Envoyer les classements dans la réponse JSON
                // 'latestReview' => $latestReview
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur : ' . $e->getMessage()
            ], 500);
        }
    }


    public function multi($userIds)
    {
        try {
            $userIds = array_map('intval', explode(',', $userIds));


            // Ajoutez ces lignes pour déboguer
            Log::info('IDs reçus:', $userIds);

            $users = User::whereIn('id', $userIds)->get(); // Assurez-vous que cette requête retourne des résultats

            if ($users->isEmpty()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Aucun utilisateur trouvé pour les IDs donnés'
                ], 404);
            }

            // $latestReviews = $users->flatMap->receiverReviews->first(); // Obtient la première revue pour chaque utilisateur

            return response()->json([
                'status' => true,
                'data' => [
                    'users' => $users,
                    // 'latestReviews' => $latestReviews,
                ]
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur : ' . $e->getMessage()
            ], 500);
        }
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        try {
            $validator = Validator::make($request->all(), []);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 401);
            }

            // Vérifiez si un nouveau fichier image est téléchargé
            if ($request->hasFile('user_image')) {
                $filenameWithExt = $request->file('user_image')->getClientOriginalName();
                $filenameWithExt = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('user_image')->getClientOriginalExtension();
                $filename = $filenameWithExt . '_' . time() . '.' . $extension;
                $request->file('user_image')->storeAs('public/uploads', $filename);

                // Supprimez l'ancien fichier image s'il existe
                if ($user->user_image && Storage::exists('public/uploads/' . $user->user_image)) {
                    Storage::delete('public/uploads/' . $user->image);
                }

                // Attribuez le nom du fichier à l'utilisateur
                $user->user_image = $filename;
            }

            $user->update([
                'user_pseudo' => $request->user_pseudo,
            ]);

            return response()->json([
                'data' => $user,
                'status' => true,
                'message' => 'Utilisateur modifié avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la modification de l\'utilisateur : ' . $e->getMessage(),
            ], 403);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($user)
    {
        try {

            $user_find = User::findOrFail($user);

            $user_find->delete();

            return response()->json([
                'status' => true,
                'message' => 'Utilisateur supprimé avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la suppression de l\'utilisateur : ' . $e->getMessage(),
            ], 403);
        }
    }
}
