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
        $genres = ['Action','Adventure','Animation','Biography','Comedy','Crime','Cultural','Documentary','Drama','Horror','Romance'];
        foreach ($genres as $genre) {
            Genre::create([
                'name' => $genre,
            ]);
        }
    }
}
