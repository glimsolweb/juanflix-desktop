<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Categories extends Model
{
    //
    protected $table = 'categories';
    protected $fillable = [
        'name',
        'banner',
        'description'
    ];

    public function films(): BelongsToMany
    {
        return $this->belongsToMany(Film::class, 'film_categories');
    }
}
