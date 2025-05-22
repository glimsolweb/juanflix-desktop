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
                'genre_icon' => 'uploaded-files/action.svg'
            ],
            [
                'name' => 'Comedy',
                'genre_icon' => 'uploaded-files/comedy.svg'
            ],
            [
                'name' => 'Documentary',
                'genre_icon' => 'uploaded-files/documentary.svg'
            ],
            [
                'name' => 'Drama',
                'genre_icon' => 'uploaded-files/drama.svg'
            ],
            [
                'name' => 'Sci-Fi',
                'genre_icon' => 'uploaded-files/scifi.svg'
            ],
            [
                'name' => 'Kids and Family',
                'genre_icon' => 'uploaded-files/kids-family.svg'
            ]
        ];
        foreach ($genres as $genre) {
            Genre::create($genre);
        }
    }
}
