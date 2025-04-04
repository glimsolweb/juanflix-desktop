<?php

namespace App\Models;

use Filament\Panel;
use Illuminate\Database\Eloquent\Model;
use Filament\Models\Contracts\FilamentUser;
use Illuminate\Foundation\Auth\User as Authenticatable;

class AdminUser extends Authenticatable implements FilamentUser
{
    //
    protected $table = 'admin_users';
    protected $fillable = ['name','email','current_team_id','profile_photo_path','deleted_at','role'];
    protected $hidden = ['password','two_factor_secret'];

    public function canAccessPanel(Panel $panel): bool
    {
        return $this->role === 'admin';
    }
}
