<?php

namespace App\Livewire\Landing\Profile;

use App\Services\ProfileService;
use Livewire\Component;

class ProfileManage extends Component
{
    public function render(ProfileService $profileService)
    {
        $profiles = $profileService->getProfileOfUser();
        return view('livewire.landing.profile.profile-manage', compact('profiles'));
    }
}
