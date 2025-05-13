<?php

namespace App\Repositories;

use App\Models\Genre;

class GenreRepository
{
    public function showAllGenre()
    {
        return Genre::get();
    }
}
