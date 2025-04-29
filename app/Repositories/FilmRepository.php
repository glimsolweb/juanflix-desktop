<?php

namespace App\Repositories;

use App\Models\Film;
use App\Models\Genre;

class FilmRepository
{
    public function getAllFilms()
    {
        $films = Film::with(['genres','categories'])->get();
        return $films;
    }

    public function getFilm(String $id)
    {
        $films = Film::with(['genres','categories'])->where('id',$id)->get();
        return $films;
    }

    public function getFilmByGenre(String $genre)
    {
        $films = Genre::where('name', $genre)->with('films')->firstOrFail();
        return $films;
    }
}
