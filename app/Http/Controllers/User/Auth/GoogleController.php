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
        dd($user);
    }
}
