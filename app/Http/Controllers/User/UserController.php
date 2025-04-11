<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Actions\Fortify\CreateNewUser;

class UserController extends Controller
{
    //
    private $createNewUser;

    public function __construct(CreateNewUser $createNewUser) {
        $this->createNewUser = $createNewUser;
    }

    public function createUser()
    {
        $user = [
            'name' => 'Test2',
            'email' => 'new@gmail.com',
            'password' => 'test1234',
            'password_confirmation' => 'test1234',
            'terms' => true,
            'provider' => 'test1',
            'provider_id' => 'test12'
        ];
        // dd($user);
        return $this->createNewUser->createSocialite($user);
    }
}
