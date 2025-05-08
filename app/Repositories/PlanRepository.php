<?php

namespace App\Repositories;

use App\Models\Plan;

class PlanRepository
{
    public function fetchAllPlans()
    {
        return Plan::all();
    }
}
