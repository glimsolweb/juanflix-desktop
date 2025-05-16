<?php

namespace App\Services;

use App\Repositories\ProfileRepository;

class ProfileService
{
    protected $ProfileRepository;
    public function __construct(ProfileRepository $profile_repository) {
        $this->ProfileRepository = $profile_repository;
    }

    public function saveUserProfile($profile_name, $selected_icon)
    {
        return $this->ProfileRepository->saveProfile($profile_name, $selected_icon);
    }

    public function saveUserPreferences($profileID, $genreID)
    {
        return $this->ProfileRepository->saveProfilePreferences($profileID, $genreID);
    }

    public function getAvailableProfileIcons()
    {
        return $this->ProfileRepository->fetchAllProfileIcons();
    }
}
