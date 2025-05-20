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
        // Attempt to login the User using given credentials
        $auth = Auth::attempt(['email' => $user_validated['email'], 'password' => $user_validated['password']]);
        if($auth) {
            // Return with JWT Token
            return $this->UserLoginRepository->respondWithToken($auth);
        }

        return response()->json([
            'message' => 'Invalid Email or Password'
        ], 401);
    }

    public function logoutUser()
    {
        try {
            //Logout the user via jwt
            Auth::logout();
            return response()->json([
                'message' => 'Successfully logged out'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th
            ], 404);
        }
    }

    public function showUserInfo()
    {
        return $this->UserLoginRepository->getUserDataApi();
    }

}
