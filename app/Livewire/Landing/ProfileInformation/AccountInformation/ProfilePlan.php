<?php

namespace App\Livewire\Landing\ProfileInformation\AccountInformation;

use App\Services\PlanService;
use Livewire\Component;

class ProfilePlan extends Component
{
    public function render(PlanService $planService)
    {
        $plan = $planService->userPlan();
        // dd($plan);
        return view('livewire.landing.profile-information.account-information.profile-plan');
    }
}
