<?php

namespace App\Livewire\Landing;

use Livewire\Component;
use App\Services\ProfileService;
use Livewire\Attributes\Validate;

class Profile extends Component
{
    #[Validate('required|max:255')]
    public $profile_name = '';
    public $selected_icon;

    public function render()
    {
        return view('livewire.landing.profile');
    }

    public function save(ProfileService $ProfileService)
    {
        // Validate the fields
        $this->validate();

        // Set default icon
        if (is_null($this->selected_icon)) {
            $this->selected_icon = 1;
        }

        // Call the function to save profile on Database
        $profile = $ProfileService->saveUserProfile($this->profile_name, $this->selected_icon);
        if ($profile) {
            $this->redirectRoute('profile-content', ['profileID' => $profile->id]);
        }
        return redirect()->back()->withErrors('something went wrong or no login user')->withInput();
    }
}
