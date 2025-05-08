<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\PlanService;

class Plan extends Component
{
    private $PlanService;
    public function mount(PlanService $plan_service)
    {
        $this->PlanService = $plan_service;
    }

    public function render()
    {
        $plans = $this->PlanService->getAllPlans();
        return view('livewire.landing.plan', compact('plans'));
    }
}
