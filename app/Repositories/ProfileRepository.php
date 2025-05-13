<?php

namespace App\Repositories;

use App\Models\Profile;
use Illuminate\Support\Facades\Auth;

class ProfileRepository
{
    public function saveProfile($profile_name, $selected_icon)
    {
        try {
            $user = Auth::user();
            Profile::create([
                'user_id' => $user->id,
                'name' => $profile_name,
                'icon' => $selected_icon
            ]);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
