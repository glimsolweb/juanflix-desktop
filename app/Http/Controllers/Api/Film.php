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

    public function filmByGenre(string $genre)
    {
        return $this->FilmService->showFilmByGenre($genre);
    }

    public function filmByGenreID(Request $request)
    {
        $arr_id = $request->ids;
        // Convert genre id parameter to array
        $genre_id = explode(',',$arr_id);
        return $this->FilmService->showFilmByGenreID($genre_id);
    }

    public function filmByCategoryId(Request $request)
    {
        $arr_id = $request->ids;
        // Convert category ids parameter to array
        $categoryIds = explode(',',$arr_id);
        return $this->FilmService->showFilmByCategoryID($categoryIds);
    }
}
