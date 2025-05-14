<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProfileIcon extends Model
{
    //
    protected $table = 'profile_icons';
    protected $fillable = [
        'image',
        'category'
    ];
}
