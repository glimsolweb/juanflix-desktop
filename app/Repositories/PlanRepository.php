<?php

namespace App\Repositories;

use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class PlanRepository
{
    public function fetchAllPlans()
    {
        return Plan::all();
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
