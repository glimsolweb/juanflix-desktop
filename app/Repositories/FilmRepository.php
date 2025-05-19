<?php

namespace App\Repositories;

use App\Models\Film;
use App\Models\Genre;
use App\Models\Categories;

class FilmRepository
{
    public function getAllFilms()
    {
        $films = Film::with(['genres','categories', 'crews'])->get();
        return $films;
    }

    public function getFilm(string $id)
    {
        $films = Film::with(['genres','categories','crews'])->where('id',$id)->get();
        return $films;
    }

    public function getFilmByGenre(string $genre)
    {
        $films = Genre::where('name', $genre)->with('films')->firstOrFail();
        return $films;
    }

    public function getFilmByGenreID(array $genre_id)
    {
        $films = Genre::whereIn('id', $genre_id)->with('films')->get();
        return $films;
    }

    public function getFilmByCategoryID(array $categoryId)
    {
        $films = Categories::whereIn('id', $categoryId)->with('films')->get();
        return $films;
    }
}
