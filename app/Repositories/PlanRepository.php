<?php

namespace App\Repositories;

use App\Jobs\CancelMembershipMailJob;
use App\Mail\CancelMembershipMail;
use App\Models\Plan;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PlanRepository
{
    public function fetchAllPlans()
    {
        return Plan::all();
    }

    public function getAuthUserPlan()
    {
        try {
            $user = Auth::user();
            $userPlan = User::where('id', $user->id)->with('plan')->first();
            return $userPlan;
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th
            ], 400);
        }
    }

    public function saveUserPlan($userSelectedPlanId)
    {
        try {
            // Save user selected subscription plan
            $user = Auth::user();
            Subscription::updateorCreate(
                ['user_id' => $user->id],
                ['plan_id' => $userSelectedPlanId],
            );
            return redirect()->route('profile');
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th
            ], 400);
        }
    }

    public function cancelPlan()
    {
        try {
            // Save user selected subscription plan
            $user = Auth::user();
            $cancelPlan = Subscription::where('user_id', $user->id)->first();
            // Mail::to($user->email)->send(new CancelMembershipMail);
            // Send the Email via Job
            dispatch(new CancelMembershipMailJob($user->email));
            // Remove current Plan
            // return $cancelPlan->delete();
            return true;
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th
            ], 400);
        }
    }
}
