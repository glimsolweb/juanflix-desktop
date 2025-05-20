<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = ['Documentary','K-Drama','Spotlight','New Release','Trending'];
        foreach ($categories as $category) {
            Categories::create([
                'name' => $category,
            ]);
        }
    }
}
