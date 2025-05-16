<?php

namespace App\Repositories;

use App\Models\Plan;

class PlanRepository
{
    public function fetchAllPlans()
    {
        return Plan::all();
    }

    public function saveUserPlan()
    {
        return redirect()->route('profile');
    }
}
