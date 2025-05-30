<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class HomepageAuth extends Component
{
    public function render()
    {
        // Redirect to verify otp if auth user is not verified
        $isOtpVerified = session()->get('otp_verified');
        if (Auth::check() && !$isOtpVerified) {
            $this->redirectRoute('verify-otp');
        }
        return view('livewire.landing.homepage-auth')
            ->layout('layouts.guest', [
                'isHeaderAbsolute' => true,
            ]);

    }
}
