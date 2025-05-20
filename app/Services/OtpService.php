<?php

namespace App\Services;

use App\Repositories\OtpRepository;

class OtpService
{
    public $OtpRepository;
    public function __construct(OtpRepository $otpRepository) {
        $this->OtpRepository = $otpRepository;
    }

    public function generateOtp()
    {
        $generateOtp = random_int(111111, 999999);
        return $this->OtpRepository->saveOtp($generateOtp);
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
