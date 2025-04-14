<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserLoginRepository
{
    public function getAllUser()
    {
        return User::get()->toJson();
    }

    public function getUserDataApi($user, $token)
    {
        return response()->json([
            'user' => $user,
            'token' => $token
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
        return redirect()->route('homepage');
    }

    public function existingUser($email)
    {
        return User::where('email', $email)->first();
    }
}
