<?php

namespace App\Livewire\Landing;

use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.landing.homepage')
            ->layout('layouts.guest', [
                'isHeaderAbsolute' => true,
            ]);
    }
}
