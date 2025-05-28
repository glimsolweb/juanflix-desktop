<?php

namespace App\Livewire\Landing\ProfileInformation;

use Livewire\Component;

class ProfileSettings extends Component
{
    public $selectedTab;
    public $sidebar;
    public $panel;

    public function mount()
    {
        $this->selectedTab = 'profile';
        $this->sidebar = 'block';
        $this->panel = 'hidden md:block';
    }

    public function selectNav($tab)
    {
        $this->selectedTab = $tab;
        $this->sidebar = 'hidden md:block';
        $this->panel = 'flex';
    }

    public function backToMenu()
    {
        $this->sidebar = 'block';
        $this->panel = 'hidden md:block';
    }

    public function render()
    {
        return view('livewire.landing.profile-information.profile-settings');
    }
}
