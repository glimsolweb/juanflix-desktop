<?php

namespace App\Http\Controllers\User\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends SocialiteController
{
    //
    public function facebookAuth()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function facebookCallBack()
    {
        $user = Socialite::driver('facebook')->user();
        $this->createOrUpdateUser($user, 'facebook');
        return redirect()->route('homepage');
    }

    public function facebookDelete()
    {
        return true;
    }
}
