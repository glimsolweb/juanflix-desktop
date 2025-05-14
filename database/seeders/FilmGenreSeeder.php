<?php

namespace Database\Seeders;

use App\Models\FilmGenre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmGenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $film_genre = [
            [
                'film_id' => 1,
                'genre_id' => 4
            ],
            [
                'film_id' => 2,
                'genre_id' => 4
            ],
            [
                'film_id' => 3,
                'genre_id' => 2
            ],
        ];

        foreach ($film_genre as $key => $films_gen) {
            # code...
            FilmGenre::create($films_gen);
        }
    }
}
