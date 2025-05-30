<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\UserLoginService;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserLoginRequest;
use App\Services\OtpService;

class UserLogin extends Controller
{
    protected $UserLoginService;
    protected $OtpService;
    public function __construct(UserLoginService $user_login_service, OtpService $otpService) {
        $this->UserLoginService = $user_login_service;
        $this->OtpService = $otpService;
    }

    // Authenticate the user via API
    public function authUserApi()
    {
        // Generate the OTP on user Auth
        $this->OtpService->generateOtp();
        // Return the user Info
        return $this->UserLoginService->showUserInfo();
    }

    public function authLogoutApi()
    {
        return $this->UserLoginService->logoutUser();
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserLoginRequest $request)
    {
        // Validate the parameter
        $user_validated = $request->validated();
        return $this->UserLoginService->authenticateUser($user_validated);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
