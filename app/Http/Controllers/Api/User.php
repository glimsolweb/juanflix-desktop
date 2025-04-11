<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Services\UserLoginService;
use App\Http\Controllers\Controller;

class User extends Controller
{
    protected $UserLoginService;
    public function __construct(UserLoginService $user_login_service) {
        $this->UserLoginService = $user_login_service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // dd($this->UserLoginService->getAllUser());
        return $this->UserLoginService->getAllUser();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
