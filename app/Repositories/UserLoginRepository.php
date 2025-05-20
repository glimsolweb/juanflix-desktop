<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use PHPOpenSourceSaver\JWTAuth\Facades\JWTAuth;

class UserLoginRepository
{
    public function getAllUser()
    {
        return User::get()->toJson();
    }

    public function getUserDataApi()
    {
        try {
            // Authenticate the user via JWT token
            $user = Auth::user();
            return response()->json([
                'user' => $user
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th
            ], 404);
        }
    }

    public function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => JWTAuth::factory()->getTTL() * 60
        ]);
    }



    public function createNewUser($user, $provider)
    {
        $created_user = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'password' => null,
            'profile_photo_path' => $user->avatar,
            'provider' => $provider,
            'provider_id' => $user->id,
        ]);

        Auth::login($created_user);
    }

    public function existingUser($email)
    {
        return User::where('email', $email)->first();
    }
}
