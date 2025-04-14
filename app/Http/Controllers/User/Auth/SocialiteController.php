<?php

namespace App\Http\Controllers\User\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserLoginRepository;

class SocialiteController extends Controller
{
    //
    protected $UserLoginRepository;
    public function __construct(UserLoginRepository $user_login_repository) {
        $this->UserLoginRepository = $user_login_repository;
    }

    public function createOrUpdateUser($user, $provider)
    {
        $exist_user = $this->UserLoginRepository->existingUser($user->email);

        if($exist_user)
        {
            Auth::login($exist_user);
            return redirect()->route('welcome');
        }else{
            $new_user = $this->UserLoginRepository->createNewUser($user, $provider);
        }
    }
}
