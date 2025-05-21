<?php

namespace App\Http\Controllers\Api;

use App\Services\OtpService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OtpRequest;

class OtpController extends Controller
{
    protected $OtpService;
    public function __construct(OtpService $otpService) {
        $this->OtpService = $otpService;
    }

    public function validateUserOtpApi(OtpRequest $otpRequest)
    {
        // Validate the inputted OTP
        $userInput = $otpRequest->validated();
        $isValidateOtp = $this->OtpService->validateOtp($userInput['otp']);
        return $isValidateOtp;
    }
}
