<?php

namespace App\Livewire\Landing\Profile;

use Livewire\Component;
use App\Services\GenreService;
use App\Services\ProfileService;

class ProfileContent extends Component
{
    protected $GenreService;
    public $content_genre_id = [];
    public $profileID;

    public function mount(GenreService $genre_service)
    {
        $this->GenreService = $genre_service;
    }

    public function selectedContentGenre()
    {
        return true;
    }

    public function save(ProfileService $ProfileService)
    {
        // Call the function to save profile on Database
        $profile = $ProfileService->saveUserPreferences($this->profileID, $this->content_genre_id);
        if ($profile) {
            $this->redirectRoute('homepage');
        }
        return redirect()->back()->withErrors('something went wrong or no login user');
    }

    public function render(GenreService $genre_service)
    {

        $contentGenre = $genre_service->getAllGenre();
        return view('livewire.landing.profile.profile-content', compact('contentGenre'));
    }
}
