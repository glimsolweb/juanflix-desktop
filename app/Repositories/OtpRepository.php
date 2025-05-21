<?php

namespace App\Repositories;

use App\Models\User;
use App\Mail\VerifyOtpMail;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OtpRepository
{
    public function saveOtp($generateOtp)
    {
        try {
            //code...
            $user = Auth::user();
            $saveOtp = $user->update([
                'otp' => $generateOtp,
                'otp_expires' => now()->addMinutes(5)
            ]);
            // Mail::to($user->email)->send(new VerifyOtpMail($generateOtp, $user->name));
            return $saveOtp;
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th
            ], 404);;
        }
    }

    public function validateUserOtp($enteredOtp)
    {
        $userOtp = Auth::user()->otp;
        if($enteredOtp == $userOtp){
            // Update the session token
            session(['otp_verified' => true]);
            return true;
        }
        return false;
    }

    public function checkUserSubscribed()
    {
        $user = Auth::user();
        return Subscription::where('user_id', $user->id)->first();
    }
}
