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

    public function showFilmByGenreID(array $genre_id)
    {
        try {
            //Get the genre model
            $films = $this->FilmRepository->getFilmByGenreID($genre_id);
            $films_checked = $films->map(function ($genre, $key){
                return $genre->films;
            });
            // Flatten the collection and set to is empty
            $films_flat = $films_checked->flatten()->isEmpty();
            // Check if the genre dont have film
            if ($films_flat) {
                return response()->json([
                    'message' => 'No films found for this genre',
                ], 200);
            }
            // Return All of the Films Based on Genre
            return $films_checked->flatten();

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Invalid Genre or Genre not found',
                'error' => $th->getMessage(),
            ], 404);
        }
    }

    public function showFilmByCategoryID(array $categoryId)
    {
        try {
            //Get the category model
            $films = $this->FilmRepository->getFilmByCategoryID($categoryId);
            $filmsChecked = $films->map(function ($category, $key){
                return $category->films;
            });
            // Flatten the collection and set to is empty
            $films_flat = $filmsChecked->flatten()->isEmpty();
            // Check if the category dont have film
            if ($films_flat) {
                return response()->json([
                    'message' => 'No films found for this category',
                ], 200);
            }
            // Return All of the Films Based on category
            return $filmsChecked->flatten();

        } catch (\Throwable $th) {
            return response()->json([
                'message' => 'Invalid Category or Category not found',
                'error' => $th->getMessage(),
            ], 404);
        }
    }
}
