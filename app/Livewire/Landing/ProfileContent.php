<?php

namespace App\Livewire\Landing;

use App\Services\GenreService;
use Livewire\Component;

class ProfileContent extends Component
{
    protected $GenreService;
    public $content_genre_id = [];

    public function mount(GenreService $genre_service)
    {
        $this->GenreService = $genre_service;
    }

    public function selectedContentGenre()
    {
        dd($this->content_genre_id);
    }

    public function render(GenreService $genre_service)
    {
        $contentGenre = $genre_service->getAllGenre();
        return view('livewire.landing.profile-content', compact('contentGenre'));
    }
}
