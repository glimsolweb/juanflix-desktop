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
}
