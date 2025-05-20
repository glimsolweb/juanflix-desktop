<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Controllers\Controller;

class Profile extends Controller
{
    private $ProfileService;
    public function __construct(ProfileService $profileService) {
        $this->ProfileService = $profileService;
    }

    // Function to get All of the Profiles of Currently Authenticated User
    public function userProfileApi()
    {
        return $this->ProfileService->getProfileOfUser();
    }

    // Function to Display All available Profiles
    public function getAvailableProfilesApi()
    {
        return $this->ProfileService->getAvailableProfileIcons();
    }
}
