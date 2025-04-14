<?php

namespace App\Repositories;

use App\Models\User;

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

    public function createNewUser($user)
    {
        dd($user);
        // return User::create([
        //     'name' => $user->name,
        // ]);
    }

    public function existingUser($email)
    {
        return User::where('email', $email)->first();
    }
}
