<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Homepage extends Model
{
    protected $table = 'homepages';
    protected $fillable = [
        'banner_section',
        'mobile_carousel',
    ];

    protected $casts = [
        'banner_section' => 'array'
    ];
}
