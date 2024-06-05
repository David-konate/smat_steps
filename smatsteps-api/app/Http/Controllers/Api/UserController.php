<?php

namespace App\Http\Controllers\Api;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Friend;
use App\Models\Ranking;
use App\Models\Smat;
use App\Models\SmatUser;
use App\Notifications\RequestNexFriendNotification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{

    public function index()
    {
        // Récupérer tous les utilisateurs et les retourner sous forme de réponse JSON
        $users = User::all();
        return response()->json($users);
    }

    public function addFriend(Request $request)
    {
        // Récupérer les IDs de l'utilisateur et de l'ami depuis la requête
        $user_id = $request->user;
        $friend_id = $request->friend;

        // Vérifiez si l'ami n'est pas déjà ajouté dans les deux sens
        $user = User::find($user_id);
        $user2 = User::find($friend_id);

        if (
            !$user->friends()->where('users.id', $friend_id)->exists() &&
            !$user2->friends()->where('users.id', $user_id)->exists()
        ) {
            // Ajoutez l'ami à la liste des amis de l'utilisateur actuel
            $user->friends()->attach($friend_id, ['status' => 1]);
            // Retournez une réponse JSON indiquant que l'ami a été ajouté avec succès
            $user2->notify(new RequestNexFriendNotification($user, $request->all()));
            return response()->json(['message' => 'Ami ajouté avec succès'], 200);
        }

        // Si l'ami est déjà dans la liste dans l'un ou l'autre sens,
        // retournez une réponse JSON indiquant qu'il est déjà présent
        return response()->json(['message' => 'L\'ami est déjà dans la liste'], 400);
    }


    public function acceptFriend(Request $request)
    {
        $user_id = $request->user;
        $friend_id = $request->friend;
        $user = User::find($user_id);
        $friend = User::find($friend_id);
        // Vérifiez si l'amitié existe dans le sens $user -> $friend
        $existingFriendshipUser = $user->friends()->wherePivot('friend_id', $friend->id)->first();

        // Vérifiez si l'amitié existe dans le sens $friend -> $user
        $existingFriendshipFriend = $friend->friends()->wherePivot('friend_id', $user->id)->first();

        // Mettez à jour la valeur de status à 2 si l'amitié existe dans l'un ou l'autre sens
        if ($existingFriendshipUser) {
            $user->friends()->updateExistingPivot($friend->id, ['status' => 2]);
        }

        if ($existingFriendshipFriend) {
            $friend->friends()->updateExistingPivot($user->id, ['status' => 2]);
        }

        // Retournez une réponse JSON pour indiquer que l'amitié a été mise à jour avec succès
        return response()->json(['message' => 'L\'amitié a été mise à jour'], 200);
    }









    //supprimé un lien d'amitié
    public function deletedFriendship(Request $request)
    {
        $user_id = $request->user;
        $friend_id = $request->friend;

        //Recherche du lien d'amitié
        $friendship = Friend::where(function ($query) use ($user_id, $friend_id) {
            $query->where('user_id', $user_id)
                ->where('friend_id', $friend_id);
        })
            ->orWhere(function ($query) use ($user_id, $friend_id) {
                $query->where('user_id', $friend_id)
                    ->where('friend_id', $user_id);
            })
            ->first();

        if ($friendship) {
            // L'enregistrement de l'amitié a été trouvé
            $friendship->delete();
            return response()->json(['message' => 'Amitié supprimé'], 200);
        } else {
            // L'amitié n'a pas été trouvée
            return response()->json(['message' => 'Amitié non trouvé'], 404);
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
                ->orWhere('status', 1)
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

        try {
            $user = User::with('friends')->where('user_pseudo', $user)->first();

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Utilisateur non trouvé'
                ], 404);
            }

            // Récupérer les classements pour le niveau actuel
            $rankings = Ranking::where('user_id', $user->id)
                ->where('level', $currentLevel)
                ->with(['theme', 'sousTheme'])
                ->orderBy('rankings.result_quiz', 'asc')
                ->orderByDesc('result_quiz')
                ->get();

            // Récupérer les Smats terminés (status = 3) liés à l'utilisateur courant via la table pivot user_smat
            $SmatsFinish = Smat::where('status', 3)
                ->whereHas('userSmats', function ($query) use ($user) {
                    $query->where('user_id', $user->id);
                })
                ->with(['theme', 'sousTheme', 'users', 'userSmats'])
                ->get();

            // Récupérer les Smats avec un statut de 2 liés à l'utilisateur courant via la table pivot user_smat
            $openSmats = Smat::where('status', 2)
                ->whereHas('userSmats', function ($query) use ($user) {
                    $query->where('user_id', $user->id);
                })

                ->with(['theme', 'sousTheme', 'users', 'userSmats'])
                ->get();

            return response()->json([
                'status' => true,
                'user' => $user,
                'rankings' => $rankings,
                'SmatsFinish' => $SmatsFinish,
                'openSmats' => $openSmats // Ajout des Smats avec un statut de 2 dans la réponse JSON
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
            $validator = Validator::make($request->all(), [
                'user_pseudo' => 'nullable|string|max:255',
                'user_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajoutez des règles de validation pour l'image
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'errors' => $validator->errors(),
                ], 400); // Utilisez le code de statut 400 pour les erreurs de validation
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
                    Storage::delete('public/uploads/' . $user->user_image);
                }

                // Attribuez le nom du fichier à l'utilisateur
                $user->user_image = $filename;
            }

            // Mettez à jour le pseudo uniquement si le champ est rempli
            if ($request->filled('user_pseudo')) {
                $user->user_pseudo = $request->user_pseudo;
                $user->slug = $request->user_pseudo;
            }

            // Sauvegardez les modifications de l'utilisateur
            $user->save();

            return response()->json([
                'data' => $user,
                'status' => true,
                'message' => 'Utilisateur modifié avec succès'
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => 'Erreur lors de la modification de l\'utilisateur : ' . $e->getMessage(),
            ], 500); // Utilisez le code de statut 500 pour les erreurs internes du serveur
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
