<?php

namespace App\Repositories;

use App\Models\Film;

class FilmRepository
{
    public function getAllFilms()
    {
        $films = Film::with(['genres','categories'])->get();
        return response()->json($films, 200);
    }

    public function getFilm()
    {

    }
}
