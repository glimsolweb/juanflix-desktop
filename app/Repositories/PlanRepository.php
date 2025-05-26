<?php

namespace App\Repositories;

use App\Models\Plan;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

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
            // dd($userPlan);
            return 1;
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
}
