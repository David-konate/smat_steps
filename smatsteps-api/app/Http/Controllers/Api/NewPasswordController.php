<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\MessageService;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Validation\ValidationException;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class NewPasswordController extends Controller
{
    // public function forgotPassword(Request $request)
    // {
    //     // Valider que l'e-mail est présent et non nul
    //     $request->validate([
    //         'email' => 'required|email'
    //     ]);

    //     // Récupérer l'e-mail depuis la requête
    //     $email = $request->input('email');

    //     try {
    //         // Envoyer le lien de réinitialisation du mot de passe en spécifiant la colonne 'email' de la table 'users'
    //         $status = Password::broker()->sendResetLink(
    //             ['email' => $email],
    //             function (Message $message) {
    //                 // Spécifiez ici le nom de la colonne utilisée pour l'e-mail dans la table 'users'
    //                 $message->user(User::class)->email('email');
    //                 dd('test');
    //             }
    //         );

    //         if ($status === Password::RESET_LINK_SENT) {
    //             // Le lien de réinitialisation a été envoyé avec succès
    //             return response()->json([
    //                 'status' => true,
    //                 'message' => "Le lien de réinitialisation vous a été envoyé.",
    //             ], 200);
    //         } elseif ($status === Password::RESET_THROTTLED) {
    //             // Le nombre maximum de tentatives de réinitialisation a été dépassé
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => "Le lien de réinitialisation a été envoyé trop souvent. Veuillez réessayer plus tard.",
    //             ], 429); // 429 Too Many Requests
    //         } else {
    //             // Une erreur s'est produite lors de l'envoi du lien de réinitialisation
    //             return response()->json([
    //                 'status' => false,
    //                 'message' => "Une erreur s'est produite lors de l'envoi du lien de réinitialisation. Veuillez réessayer.",
    //             ], 500); // Internal Server Error
    //         }
    //     } catch (\Exception $e) {
    //         // Gérer toute autre erreur
    //         return response()->json([
    //             'status' => false,
    //             'message' => "Une erreur s'est produite lors de la réinitialisation du mot de passe. " . $e->getMessage()
    //         ], 500);
    //     }
    // }
    public function forgotPassword(Request $request)
    {

        $request->validate([
            'email' => 'required|email'
        ]);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        // Utilisez le broker 'users' configuré
        $status = Password::broker('users')->sendResetLink(
            $request->only('email')
        );
        // dd(Password::RESET_LINK_SENT);

        if ($status == Password::RESET_THROTTLED) {
            return response()->json([
                'status' => true,
                'message' => "Le lien de réinitialisation vous a été envoyé",
            ], 200);
        }

        // throw ValidationException::withMessages([
        //     'message' => "Cet email n'existe pas"
        // ]);
    }




    public function reset(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required',
            'password' => 'required|min:6|confirmed'
        ]);

        $status = Password::broker('users')->reset(
            [
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'password_confirmation' => $request->input('password_confirmation'),
                'token' => $request->input('token'),
            ],
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            return response()->json([
                'status' => true,
                'message' => "Mot de passe modifié"
            ], 200);
        }

        return response()->json([
            'status' => false,
            'message' => __($status)
        ], 400);
    }
}
