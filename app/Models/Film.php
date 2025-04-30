<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Film extends Model
{
    //
    protected $table = 'films';
    protected $fillable = [
        'title',
        'description',
        'released_at',
        'media_id',
        'trailer_id',
        'film_type',
        'poster',
        'thumbnail',
        'rating',
        'duration',
        'deleted_at',
        'country',
        'additional_src',
    ];

    public function genres(): BelongsToMany
    {
        return $this->belongsToMany(Genre::class, 'film_genres');
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Categories::class, 'film_categories');
    }
}
