<?php

namespace App\Livewire\Landing\ProfileInformation\AccountInformation;

use App\Services\PlanService;
use Livewire\Component;

class ProfilePlan extends Component
{
    public $plan;

    public function redirectCancelMembership()
    {
        $this->redirect('cancel-membership');
    }

    public function render(PlanService $planService)
    {
        $plan = $planService->userPlan();
        $this->plan = $plan->plan->first();
        return view('livewire.landing.profile-information.account-information.profile-plan');
    }
}
