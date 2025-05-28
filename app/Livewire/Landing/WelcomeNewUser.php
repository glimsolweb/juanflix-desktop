<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Illuminate\Http\Request;
use Browser;

class WelcomeNewUser extends Component
{
    public $isMobile;
    public $isInApp;

    public function mount()
    {
        $this->isMobile = false;
        $this->isInApp = false;
    }

    public function render(Request $request)
    {
        // Check user device
        $this->isMobile = Browser::isMobile();
        $this->isInApp = Browser::isInApp();
        return view('livewire.landing.welcome-new-user');
    }
}
