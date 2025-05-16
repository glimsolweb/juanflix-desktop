<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\PlanService;

class Plan extends Component
{
    private $PlanService;
    public $planSelected;
    public function mount(PlanService $plan_service)
    {
        $this->PlanService = $plan_service;
    }

    public function save(PlanService $plan_service)
    {
        $userSelectedPlanId = $this->planSelected;
        return $plan_service->selectedUserPlan();
    }

    public function userPlanSelected()
    {
        return true;
    }

    public function render(PlanService $plan_service)
    {
        $plans = $plan_service->getAllPlans();
        return view('livewire.landing.plan', compact('plans'));
    }
}
