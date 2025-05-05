<?php

namespace Database\Seeders;

use App\Models\Crew;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CrewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $crews = [
            [
                'name' => 'Mark',
                'image' => '',
                'position' => 'Director',
                'priority' => '1'
            ],
            [
                'name' => 'Glenn',
                'image' => '',
                'position' => 'Writer',
                'priority' => '1'
            ],
            [
                'name' => 'Pialago',
                'image' => '',
                'position' => 'Producer',
                'priority' => '1'
            ],
        ];

        foreach ($crews as $key => $crew) {
            # code...
            Crew::create($crew);
        }
    }
}
