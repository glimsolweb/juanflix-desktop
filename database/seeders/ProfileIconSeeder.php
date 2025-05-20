<?php

namespace Database\Seeders;

use App\Models\ProfileIcon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileIconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $icons = [
            [
                'image' => 'uploaded-files/icon-yellow.jpg',
                'category' => 'Drama'
            ],
            [
                'image' => 'uploaded-files/profile1.png',
                'category' => 'Drama'
            ],
            [
                'image' => 'uploaded-files/profile2.png',
                'category' => 'Horror'
            ],
            [
                'image' => 'uploaded-files/profile3.png',
                'category' => 'Drama'
            ],
        ];

        foreach ($icons as $icon) {
            ProfileIcon::create($icon);
        }
    }
}
