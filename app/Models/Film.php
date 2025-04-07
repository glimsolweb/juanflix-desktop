<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $table = 'films';
    protected $fillable = [
        'title',
        'description',
        'released_at',
        'src',
        'trailer_src',
        'poster',
        'thumbnail',
        'rating',
        'duration',
        'is_free',
        'has_detailed_page',
        'deleted_at',
        'country',
        'additional_src',
    ];
}
