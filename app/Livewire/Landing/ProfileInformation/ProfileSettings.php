<?php

namespace App\Livewire\Landing\ProfileInformation;

use Livewire\Component;

class ProfileSettings extends Component
{
    public $selectedTab = 'profile';
    public function selectNav($tab)
    {
        $this->selectedTab = $tab;
    }

    public function render()
    {
        return view('livewire.landing.profile-information.profile-settings');
    }
}
