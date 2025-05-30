<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Models\ProfileIcon;
use App\Models\ProfilePreference;
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

    public function saveProfilePreferences($profileID, $genreID)
    {
        try {
            $profilePreference = ProfilePreference::create([
                'profile_id' => $profileID,
                'genre_id' => $genreID,
            ]);
            return $profilePreference;
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

    public function fetchProfilesAuthUser()
    {
        try {
            //Fetch all Profiles of Current Authenticated User
            $currentUser = Auth::user();
            $profiles = Profile::where('user_id', $currentUser->id)->with('profile_icons')->get();
            return $profiles;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
