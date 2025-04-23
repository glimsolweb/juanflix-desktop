<?php

namespace App\Services;

use App\Repositories\FilmRepository;

class FilmService
{
    private $FilmRepository;

    public function __construct(FilmRepository $film_repository) {
        $this->FilmRepository = $film_repository;
    }

    public function showFilmsOnAPI()
    {
        return $this->FilmRepository->getAllFilms();
    }
}
