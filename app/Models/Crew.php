<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    //
    protected $table = 'crews';
    protected $fillable = [
        'name',
        'image',
        'position',
        'priority',
    ];
}
