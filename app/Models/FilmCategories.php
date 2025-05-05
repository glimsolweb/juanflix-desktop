<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FilmCategories extends Model
{
    //
    protected $table = 'film_categories';
    protected $fillable = [
        'film_id',
        'categories_id',
    ];
}
