<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends SocialiteController
{
    //
    public function googleAuth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallBack()
    {
        $user = Socialite::driver('google')->user();
        $this->userFields($user);
        dd($user);
    }

    public function userFields($user)
    {
        $user_fields = [
            'name' => $user->name,
            'email' => $user->email,
            'password' => null,
            'password_confirmation' => null,
            'terms' => true,
        ];
    }
}
