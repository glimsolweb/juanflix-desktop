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
        $films = $this->FilmRepository->getAllFilms();
        return response()->json($films, 200);
    }

    public function fetchFilmByID(string $id)
    {
        return $this->FilmRepository->getFilm($id);
    }

    public function showFilmByGenre(string $genre)
    {
        try {
            //Get the genre model
            $films = $this->FilmRepository->getFilmByGenre($genre);

            // Check if the genre dont have film
            if ($films->films->isEmpty()) {
                return response()->json([
                    'message' => 'No films found for this genre',
                ], 200);
            }
            // Return All of the Films Based on Genre
            return $films;
        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Invalid Genre or Genre not found',
                'error' => $th->getMessage(),
            ], 404);
        }
    }
}
