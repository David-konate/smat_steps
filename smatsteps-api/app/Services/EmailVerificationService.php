<?php

namespace App\Services;

use App\Models\EmailVerificationTokens;
use App\Models\User;
use App\Notifications\EmailForgotPasswordNotification;
use App\Notifications\EmailVerificationNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class EmailVerificationService
{

    public function sendVerificationLink(object $user): void
    {
        $user['email'] = $user->email;

        Notification::send($user, new EmailVerificationNotification($this->generateVerificationActionLink($user->email)));
    }

    public function sendForgotPasswordLink(object $user): void
    {

        $url = config('app.url') . '/password/forgot' . "?token=$user->token" . "&email=$user->email";

        Notification::send($user, new EmailForgotPasswordNotification($url));
    }

    public function resendEmailVerificationLink($email)
    {
        $user = User::where('email', $email)->first();

        if ($user) {
            $this->sendVerificationLink($user);
            return response()->json([
                'status' => 'success',
                "message" => 'email de validation renvoyé'
            ]);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => "Utilisateur non trouvé"
            ], 403);
        }
    }

    public function checkEmailIsVerified($user)
    {

        if ($user->email_verified_at !== null) {
            return true;
        } else {
            return false;
        }
    }

    public function verifyEmail(string $token, string $email)
    {

        $user = User::where('email', $email)->first();

        if (!$user) {
            return response()->json([
                'status' => 'failed',
                'message' => "Utilisateur non trouvé"
            ], 403);
        }

        if ($this->checkEmailIsVerified($user)) {
            return response()->json([
                'status' => 'failed',
                'message' => "Votre compte a déjà été vérifié"
            ], 401);
        }


        $verifiedToken = $this->verifyToken($email, $token);

        if (!$user->email_verified_at) {
            $tokenModel = EmailVerificationTokens::find($verifiedToken->id);
            $tokenModel->delete();

            User::find($user->id)->update([
                'email_verified_at' => now()
            ]);

            return response()->json([
                'status' => 'success',
                'message' => "Votre email a été validé avec succès"
            ], 201);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => "Echec de la vérification de l'email, veuillez réessayer plus tard"
            ], 401);
        }
    }

    public function verifyToken(string $email, string $token)
    {
        $tokenModel = EmailVerificationTokens::where('email', $email)->where('token', $token)->first();
        if ($tokenModel) {
            if ($tokenModel->expired_at >= now()) {
                return $tokenModel;
            } else {
                EmailVerificationTokens::find($tokenModel->id)->delete();
                return response()->json([
                    'status' => 'failed',
                    'message' => "Token expiré"
                ], 403);
            }
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Token invalide'
            ], 403);
        }
    }

    public function generateVerificationActionLink(string $email): string
    {
        $checkIfTokenExist = EmailVerificationTokens::where('email', $email)->first();

        if ($checkIfTokenExist) {
            $checkIfTokenExist->delete();
        }

        $token = Str::uuid();
        $url = config('app.url') . '/email/verify' .  "?token=" . $token . "&email=" . $email;

        $savedToken = EmailVerificationTokens::create([
            'email' => $email,
            'token' => $token,
            'expired_at' => now()->addMinutes(60)
        ]);

        if ($savedToken) {
            return $url;
        }
    }
}
