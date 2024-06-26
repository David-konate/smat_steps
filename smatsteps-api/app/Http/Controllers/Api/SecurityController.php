<?php

namespace App\Http\Controllers\Api;

use App\Services\EmailVerificationService;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class SecurityController extends Controller
{

    public function __construct(private EmailVerificationService $emailVerificationService)
    {
    }
    public function login(Request $request)
    {

        try {
            $validation = Validator::make(request()->all(), [
                'email' => 'required|min:1|string',
                'password' => 'required|min:1|string',
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validation->errors()
                ], 401);
            }
            //verifi si leuser exist
            if (!Auth::attempt($request->only(['email', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => "L'email ou le mot de passe ne sont pas correct"
                ], 401);
            }
            $user = User::where("email", $request->email)->first();
            return response()->json([
                "status" => true,
                "message" => "User connecté",
                "user" => $user,
                //plainTextToken  => token en forme de string
                "token" => $user->createToken("API TOKEN")->plainTextToken
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage(),
            ], 403);
        }
    }

    public function register(Request $request)
    {
        try {
            $validation = Validator::make($request->all(), [
                'user_pseudo' => 'required|min:1|string|unique:users,user_pseudo',
                'email' => 'required|min:1|string|unique:users,email',
                'password' => 'required|string|min:8',
            ]);

            if ($validation->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation error',
                    'errors' => $validation->errors(),
                ], 422); // Utilisation du statut HTTP 422 pour les erreurs de validation
            }

            // Si la validation réussit, vous pouvez créer l'utilisateur
            $user = User::create([
                'user_pseudo' => $request->user_pseudo,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'is_admin' => 0,
            ]);

            $this->emailVerificationService->sendVerificationLink($user);

            return response()->json([
                'status' => 'success',
                'message' => 'Merci pour votre inscription, vérifiez vos mails pour confirmer votre inscription',
                'user' => $user,
            ], 200);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ], 403);
        }
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->user()->tokens()->delete();

        return response()->json(['message' => 'Deconnexion']);
    }
}
