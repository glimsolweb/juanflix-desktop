<?php

namespace App\Services;

use App\Repositories\GenreRepository;

class GenreService
{
    private $GenreRepository;
    public function __construct(GenreRepository $genre_repository) {
        $this->GenreRepository = $genre_repository;
    }

    public function getAllGenre()
    {
        return $this->GenreRepository->showAllGenre();
    }
}
