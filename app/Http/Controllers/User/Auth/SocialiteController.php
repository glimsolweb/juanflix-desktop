<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\UserLoginRepository;

class SocialiteController extends Controller
{
    //
    protected $UserLoginRepository;
    public function __construct(UserLoginRepository $user_login_repository) {
        $this->UserLoginRepository = $user_login_repository;
    }

    public function createOrUpdateUser($user)
    {
        dd($user->email);
        $this->UserLoginRepository->existingUser($user->email);
    }
}
