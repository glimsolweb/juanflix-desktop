<?php

namespace App\Livewire\Landing;

use App\Services\OtpService;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class VerifyOtp extends Component
{
    public $otp1, $otp2, $otp3, $otp4, $otp5, $otp6;
    public $otp;

    public function mount(OtpService $otpService)
    {
        // Send the OTP on initial component load
        $otpService->generateOtp();
    }

    public function submitOtp(OtpService $otpService)
    {
        // Initialize the otp with concatanation
        $this->otp = $this->otp1 . $this->otp2 . $this->otp3 . $this->otp4 . $this->otp5 . $this->otp6;
        // Validate the fields
        $this->validate([
            'otp' => 'required|digits:6|numeric'
        ]);
        $enteredOtp = $this->otp;
        // Validate the Otp inputted
        $validateOtp = $otpService->validateOtp($enteredOtp);
        if ($validateOtp) {
            // Check if user has Plan Subscription
            $isSubscribed = $otpService->isUserSubscribed();
            if ($isSubscribed) {
                return $this->redirectRoute('homepage');
            }
            // Redirect to Plan if there is no Subscription
            return $this->redirect('plans');
        }
        $this->addError('otp', 'Error Invalid OTP');
    }

    public function render()
    {
        $user = Auth::user();
        // dd(session()->all());
        return view('livewire.landing.verify-otp', compact('user'));
    }
}
