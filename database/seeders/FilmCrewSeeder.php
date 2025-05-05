<?php

namespace Database\Seeders;

use App\Models\FilmCrew;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmCrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $film_crew = [
            [
                'film_id' => 1,
                'crew_id' => 1
            ],
            [
                'film_id' => 2,
                'crew_id' => 2
            ],
            [
                'film_id' => 3,
                'crew_id' => 3
            ],
        ];

        foreach ($film_crew as $key => $crew) {
            # code...
            FilmCrew::create($crew);
        }
    }
}
