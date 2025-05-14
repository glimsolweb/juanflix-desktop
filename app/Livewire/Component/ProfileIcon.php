<?php

namespace App\Livewire\Component;

use App\Services\ProfileService;
use Flux\Flux;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class ProfileIcon extends Component
{
    public $selectedIconImg;
    #[Modelable]
    public $selectedIconID;

    private $ProfileService;

    public function mount(ProfileService $profile_service)
    {
        $this->ProfileService = $profile_service;
    }

    public function renderIcon($iconImg, $iconID)
    {

        $this->selectedIconImg = $iconImg;
        $this->selectedIconID = $iconID;
        Flux::modal('edit-profile')->close();
    }

    public function render(ProfileService $profile_service)
    {
        // Available Icons
        $available_icons = $profile_service->getAvailableProfileIcons();
        // Default Icon
        $selectedIconImg = 'images/icon-yellow.jpg';
        $selectedIconId = 1;
        return view('livewire.component.profile-icon', compact('selectedIconImg', 'available_icons', 'selectedIconId'));
    }
}
