<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Genre extends Model
{
    //
    protected $table = 'genres';
    protected $fillable = [
        'name',
        'genre_icon',
        'banner',
        'description',
    ];

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'film_genres');
    }
}
