<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfilePreference extends Model
{
    //
    protected $table = 'profile_preferences';
    protected $fillable = [
        'profile_id',
        'genre_id',
        'category_id',
    ];
    protected $casts = [
        'genre_id' => 'array',
        'category_id' => 'array',
    ];
}
