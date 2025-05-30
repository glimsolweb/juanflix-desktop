<?php

namespace Database\Seeders;

use App\Models\FilmCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilmCategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $film_categories = [
            [
                'film_id' => 1,
                'categories_id' => 1
            ],
            [
                'film_id' => 2,
                'categories_id' => 3
            ],
            [
                'film_id' => 3,
                'categories_id' => 3
            ],
            [
                'film_id' => 4,
                'categories_id' => 4
            ],
            [
                'film_id' => 5,
                'categories_id' => 4
            ],
            [
                'film_id' => 6,
                'categories_id' => 5
            ],
            [
                'film_id' => 7,
                'categories_id' => 5
            ],
        ];

        foreach ($film_categories as $key => $films_cat) {
            # code...
            FilmCategories::create($films_cat);
        }
    }
}
