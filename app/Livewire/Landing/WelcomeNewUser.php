<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use Illuminate\Http\Request;
use Browser;

class WelcomeNewUser extends Component
{
    public $isMobile;
    public $mobileRegx;

    public function mount()
    {
        $this->isMobile = false;
        $this->mobileRegx = false;
    }

    public function render(Request $request)
    {
        // Check user device
        $this->isMobile = Browser::isMobile();
        $this->mobileRegx = Browser::userAgent();
        return view('livewire.landing.welcome-new-user');
    }
}
