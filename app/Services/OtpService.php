<?php

namespace App\Services;

use App\Repositories\OtpRepository;
use Illuminate\Support\Facades\Auth;

class OtpService
{
    public $OtpRepository;
    public function __construct(OtpRepository $otpRepository) {
        $this->OtpRepository = $otpRepository;
    }

    public function generateOtp()
    {
        $user = Auth::user();
        $generateOtp = random_int(111111, 999999);
        // Check if current Auth user can sendOtp
        $canSendOtp = $this->canSendOtp($user);
        if($canSendOtp){
            return $this->OtpRepository->saveOtp($generateOtp);
        }
        return false;
    }

    public function canSendOtp($user)
    {
        if ($user->otp_expires <= now()) {
            return true;
        }
        return false;
    }

    public function resendCounter()
    {
        $user = Auth::user();
        $dateInterval = now()->diff($user->otp_expires);
        // Return the remaining time of otp
        if ($user->otp_expires) {
            if(now()->lessThan($user->otp_expires)){
                return $dateInterval->minutes . ':' . $dateInterval->seconds;
            }
        }
        return 0;
    }

    public function validateOtp($enteredOtp)
    {
        return $this->OtpRepository->validateUserOtp($enteredOtp);
    }

    public function isUserSubscribed()
    {
        return $this->OtpRepository->checkUserSubscribed();
    }

}
