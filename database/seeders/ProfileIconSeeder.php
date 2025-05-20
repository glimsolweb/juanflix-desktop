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
                'image' => '../images/icon-yellow.jpg',
                'category' => 'Drama'
            ],
            [
                'image' => '../images/profile1.png',
                'category' => 'Drama'
            ],
            [
                'image' => '../images/profile2.png',
                'category' => 'Horror'
            ],
            [
                'image' => '../images/profile3.png',
                'category' => 'Drama'
            ],
        ];

        foreach ($icons as $icon) {
            ProfileIcon::create($icon);
        }
    }
}
