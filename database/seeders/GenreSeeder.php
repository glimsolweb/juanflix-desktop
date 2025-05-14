<?php

namespace Database\Seeders;

use App\Filament\Resources\Admin\GenreResource\Pages\CreateGenre;
use App\Models\Genre;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $genres = [
            [
                'name' => 'Action',
                'genre_icon' => 'images/action.svg'
            ],
            [
                'name' => 'Comedy',
                'genre_icon' => 'images/comedy.svg'
            ],
            [
                'name' => 'Documentary',
                'genre_icon' => 'images/documentary.svg'
            ],
            [
                'name' => 'Drama',
                'genre_icon' => 'images/drama.svg'
            ],
            [
                'name' => 'Sci-Fi',
                'genre_icon' => 'images/scifi.svg'
            ],
            [
                'name' => 'Kids and Family',
                'genre_icon' => 'images/kids-family.svg'
            ]
        ];
        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
