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
                'user_pseudo' => 'required|min:1|string',
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
            if (!Auth::attempt($request->only(['user_pseudo', 'password']))) {
                return response()->json([
                    'status' => false,
                    'message' => "Le pseudo ou le mot de passe ne sont pas correct"
                ], 401);
            }

            $user = User::where("user_pseudo", $request->user_pseudo)->first();

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
            $validation = Validator::make(request()->all(), [
                'user_pseudo' => 'required|min:1|string|unique:users,user_pseudo,',
                'email' => 'required|min:1|string|unique:users,email,',
                'password' => 'required|string|min:8',

            ]);

            if ($validation->fails()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Validation error',
                    'errors' => $validation->errors(),
                ], 401);
            }

            // Si la validation réussit, vous pouvez créer l'utilisateur
            $user = User::create(array_merge(
                $validation->validated(),
                [
                    'password' => Hash::make($request->password),
                    'is_admin' => 0,
                ]
            ));
            $this->emailVerificationService->sendVerificationLink($user);

            return response()->json([
                'status' => 'success',
                'message' => 'Merci pour votre inscription',
                'user' => $user,
                'token' => $user->createToken('API TOKEN')->plainTextToken
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
