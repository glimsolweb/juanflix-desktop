<?php

namespace App\Services;

use App\Repositories\PlanRepository;

class PlanService
{
    private $PlanRepository;
    public function __construct(PlanRepository $plan_repository) {
        $this->PlanRepository = $plan_repository;
    }

    public function getAllPlans()
    {
        return $this->PlanRepository->fetchAllPlans();
    }

    public function selectedUserPlan($userSelectedPlanId)
    {
        return $this->PlanRepository->saveUserPlan($userSelectedPlanId);
    }

    public function userPlan()
    {
        return $this->PlanRepository->getAuthUserPlan();
    }

    public function cancelUserPlan()
    {
        return $this->PlanRepository->cancelPlan();
    }
}
