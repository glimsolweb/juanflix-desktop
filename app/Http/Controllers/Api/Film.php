<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\FilmService;

class Film extends Controller
{
    private $FilmService;
    public function __construct(FilmService $film_service) {
        $this->FilmService = $film_service;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->FilmService->showFilmsOnAPI();
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
        // Show specific film by id
        return $this->FilmService->fetchFilmByID($id);

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
