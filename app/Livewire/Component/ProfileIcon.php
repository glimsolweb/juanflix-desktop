<?php

namespace App\Livewire\Component;

use Flux\Flux;
use Livewire\Attributes\Modelable;
use Livewire\Component;

class ProfileIcon extends Component
{
    #[Modelable]
    public $selectedIcon;
    public function renderIcon($icon)
    {
        $this->selectedIcon = $icon;
        Flux::modal('edit-profile')->close();
    }

    public function render()
    {
        // Available Icons
        $available_icons = [
            'images/icon-yellow.jpg',
            'images/profile1.png',
            'images/profile2.png',
            'images/profile3.png',
        ];
        // Default Icon
        $selectedIcon = 'images/icon-yellow.jpg';
        return view('livewire.component.profile-icon', compact('selectedIcon','available_icons'));
    }
}
