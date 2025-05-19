<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Profile extends Model
{
    //
    protected $table = 'profiles';
    protected $fillable = [
        'user_id',
        'name',
        'profile_icon_id',
    ];

    public function profile_icons(): BelongsTo
    {
        return $this->belongsTo(ProfileIcon::class, 'profile_icon_id', 'id');
    }
}
