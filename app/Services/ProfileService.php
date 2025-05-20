<?php

namespace App\Services;

use App\Repositories\ProfileRepository;

class ProfileService
{
    protected $ProfileRepository;
    public function __construct(ProfileRepository $profile_repository) {
        $this->ProfileRepository = $profile_repository;
    }

    // Save The Inputted User Profile
    public function saveUserProfile($profile_name, $selected_icon)
    {
        return $this->ProfileRepository->saveProfile($profile_name, $selected_icon);
    }

    // Save The Inputted User Preferences
    public function saveUserPreferences($profileID, $genreID)
    {
        return $this->ProfileRepository->saveProfilePreferences($profileID, $genreID);
    }

    // Display All Available Profile Icons
    public function getAvailableProfileIcons()
    {
        return $this->ProfileRepository->fetchAllProfileIcons();
    }

    // Get all of the Profiles of Currently authenticated User
    public function getProfileOfUser()
    {
        return $this->ProfileRepository->fetchProfilesAuthUser();
    }

    // Function to check if User reach Max Profile limit
    public function checkUserMaxProfile()
    {
        $profiles = $this->ProfileRepository->fetchProfilesAuthUser();
        if ($profiles->count() >= 5) {
            return $profiles;
        }
        return false;
    }
}
