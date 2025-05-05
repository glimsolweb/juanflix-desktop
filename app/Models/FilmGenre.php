<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilmGenre extends Model
{
    //
    protected $table = 'film_genres';
    protected $fillable = [
        'film_id',
        'genre_id',
    ];
}
