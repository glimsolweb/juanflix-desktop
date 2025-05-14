<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Models\ProfileIcon;
use Illuminate\Support\Facades\Auth;

class ProfileRepository
{
    public function saveProfile($profile_name, $selected_icon)
    {
        try {
            $user = Auth::user();
            $profile = Profile::create([
                'user_id' => $user->id,
                'name' => $profile_name,
                'profile_icon_id' => $selected_icon
            ]);
            return $profile;
        } catch (\Throwable $th) {
            return false;
        }
    }

    public function fetchAllProfileIcons()
    {
        try {
            $icons = ProfileIcon::get();
            return $icons;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
