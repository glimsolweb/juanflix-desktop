<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $sample_films = [
            [
                'title' => 'Jodilerks Dela Cruz, Employee of the Month',
                'description' => '<p>Previously dedicated to her job at a soon-to-close gas station, the subject devotes her last night of employment to some questionable acts, thereby reflecting the increasingly anarchic nature of the society around her.</p>',
                'released_at' => '2025-04-30',
                'media_id' => 'itENrW6B',
                'trailer_id' => 'jj2FDwRl',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/u5MujZgQuPY6TduAxu22J0e6PXnKvX0uL0EK8Pl3.png',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/rF88VkXntX4WMPcvivTUzoOu2RFgB6BfgCurHLKB.png',
                'rating' => 'R-13',
                'duration' => '13'
            ],
            [
                'title' => 'Ang Babaeng Humayo',
                'description' => '<p>For Horacia Somorostro, living has become a veritable reclusion perpetua, an imprisonment. Life’s spins and randomness has been very difficult, vicious and inexplicable for her. The year is 1997. Princess Diana dies in a violent car crash. The world is saddened by the death of Mother Theresa. And the Philippines is gripped with fear. It has become the kidnap capital of Asia.</p>',
                'released_at' => '2016-04-30',
                'media_id' => 'f6JgC9en',
                'trailer_id' => 'zESeD1hy',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/pLnmju7zajpJngXGh9JCBncQ8r9VReDCchOhF05p.jpg',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/zetTPZexCRR9qMxOimoWVrTkRqc8bUGRl6AA0RGr.png',
                'rating' => 'R-16',
                'duration' => '227'
            ],
            [
                'title' => 'Ang Unang Araw ng Pasukan',
                'description' => '<p>Tells the story of a 10-year-old boy from a family struggling in poverty who wakes up to what seems to be an enticing day. Having only his dreams and determination with him, he goes on his way for the first day of school.</p>',
                'released_at' => '2017-10-31',
                'media_id' => 'MDV6Z7lb',
                'trailer_id' => '8A7JJdra',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/k277RmZ8Pw2pOUffTFUelNNSbzPHums2VqFJTVYy.png',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/kJxaTXc7Xt1RBJm4FIBNOQbvitD38GzFBdaJFYMx.png',
                'rating' => 'PG',
                'duration' => '5'
            ],
        ];

        foreach ($sample_films as $key => $films) {
            Film::create($films);
        }
    }
}
