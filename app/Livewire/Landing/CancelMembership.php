<?php

namespace App\Livewire\Landing;

use App\Services\PlanService;
use Livewire\Component;

class CancelMembership extends Component
{

    public function cancelMembershipPlan(PlanService $planService)
    {
        $plan = $planService->cancelUserPlan();
        if ($plan) {
            $this->redirect('profile-information');
        }
    }

    public function render()
    {
        return view('livewire.landing.cancel-membership');
    }
}
