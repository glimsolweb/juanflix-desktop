<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\UserLoginRequest;
use App\Repositories\UserLoginRepository;

class UserLoginService
{
    protected $UserLoginRepository;
    public function __construct(UserLoginRepository $user_login_repository) {
        $this->UserLoginRepository = $user_login_repository;
    }

    public function getAllUser()
    {
        return $this->UserLoginRepository->getAllUser();
    }

    public function authenticateUser($user_validated)
    {
        $auth = Auth::attempt(['email' => $user_validated['email'], 'password' => $user_validated['password']]);
        if($auth) {
            $user = Auth::user();
            $token = $user->createToken('mobile_token')->plainTextToken;
            return $this->UserLoginRepository->getUserDataApi($user, $token);
        }

        return back()->withErrors([
            'message' => 'Invalid email or password'
        ]);
    }
}
