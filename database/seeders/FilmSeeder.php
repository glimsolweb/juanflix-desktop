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
                'title' => 'KNa The Dreamweaver',
                'description' => '<p>When K’na, a young T’boli woman, becomes a dreamweaver, she has the chance to weave together her village’s warring clans. But, will she give up true love to do so?</p>',
                'released_at' => '2021-06-10',
                'media_id' => 'aubWoxhE',
                'trailer_id' => 'DbqoRZb5',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/Xa0zT3lAsYkwGKcAnRaXCbZhbzZUDj5SOUMSjOfb.jpg',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/1yNacUrKLHTE2uPotC0By7sPOG8TQH1X7ztRu0gK.png',
                'rating' => 'PG',
                'duration' => '86'
            ],
            [
                'title' => 'Dahil Mahal Na Mahal Kita',
                'description' => '<p>A straight-laced student and the campus bad girl shock the people around them with news that they are dating. But when misunderstandings and arguments come their way, they realize that it takes more than physical attraction to achieve lasting love.</p>',
                'released_at' => '2024-06-27',
                'media_id' => 'rxCuaRlP',
                'trailer_id' => 'yvnMr2cU',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/wiiYvOBuI7zio00oNVXcjGLqNmCnUWArjMA7PMxA.png',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/racEfBnf6XkgBhdmnFEgR52FAvxN05xl9fRa4Tlp.png',
                'rating' => 'PG',
                'duration' => '110'
            ],
            [
                'title' => 'Anak',
                'description' => '<p>A woman returns to the Philippines after working abroad to find that her family has fallen apart in her absence.</p>',
                'released_at' => '2024-07-19',
                'media_id' => 'XpsfpYkg',
                'trailer_id' => 'OVPDvAKh',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/NlgSoXxX4PszWfwaoJ8Yy88FhtSFxC4ujTWoBXZC.png',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/jRAI4m3TDpeBJuhPF1EThI95Tkcv52cPgSw4hbkh.png',
                'rating' => 'PG',
                'duration' => '135'
            ],
            [
                'title' => 'Gusto Kita With All My Hypothalamus',
                'description' => '<p>In Avenida, the lives of four men intertwine, searching for something. They all find what they are looking for in one woman named Aileen.</p>',
                'released_at' => '2021-06-10',
                'media_id' => 'mSWgpLbN',
                'trailer_id' => 'Ihiomi1Z',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/ugybu2dnFT7ZVNr5EmjEnflW95W2xY1NtDhFT1Mh.png',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/Ym3k5XhVYoD5ITKw6GqkHOpNgE5PzsP3ShqSZpfk.png',
                'rating' => 'R16',
                'duration' => '99'
            ],
            [
                'title' => 'Ma` Rosa',
                'description' => '<p>Ma` Rosa has four children. She owns a small convenience store in a poor neighborhood of Manila where everybody likes her. To make ends meet, Rosa and her husband, Nestor, resell small amounts of narcotics on the side. One day, they get arrested. Rosa and her children are ready to do anything to buy her freedom from the corrupt police.</p>',
                'released_at' => '2021-07-10',
                'media_id' => 'AHlZON2e',
                'trailer_id' => 'E9GChlxw',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/7DzgGMwgxQqA5ZVyFGaYYWWZ5uRUykRfxiAN4uh2.png',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/vxKEQy7bSPfyQFxF1WEoUGxMhfdR2FogxWArGPMm.png',
                'rating' => 'R13',
                'duration' => '110'
            ],
            [
                'title' => 'Budots The Craze',
                'description' => '<p>"Budots" has swept the entire nation by storm. But the dance craze that has people move around in uncoordinated, freestyle dance to a weird mix of electronic sound and noises, originated in Davao City in Southern Philippines before it got viral in the Internet and social media. An internet bum and a small group of people in his community started it alI.</p>',
                'released_at' => '2021-11-13',
                'media_id' => 'nAC38few',
                'trailer_id' => 'fL5EVXTi',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/La9HcpwAKZ0ANnUbQGI9k6oVx6p0QQzRHuHRZ0HQ.jpg',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/8BOcOoQrBZ0xS3IYL8O1dh0rGOSfktw8lelNO8t3.jpg',
                'rating' => 'PG',
                'duration' => '22'
            ],
            [
                'title' => 'Debosyon',
                'description' => '<p>"To love is to have faith. Mando, a Bikolano devotee of Ina, Virgin of Penafrancia, Patroness of Bikolandia, injures himself in the middle of the forest at the foot of the Mayon Volcano. He will be nursed back to health by a mysterious woman, Salome, living there. They will fall in love with each other. But when Mando invites her to come with him to the plains, Salome refuses, saying a curse prohibits her from leaving the forest. Salome holds a secret that will devastate Mando`s love for her. Mando relies on his devotion to the Virgin of Penafrancia to lift the curse, making realize how inextricably linked are the virtues of love and faith.</p>',
                'released_at' => '2021-06-10',
                'media_id' => 'kyVZyOsY',
                'trailer_id' => 'e5PfSMzy',
                'film_type' => 'subscription',
                'poster' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/zjbnNgJq76HeAp9uqxZdI203qdt5LzhO2IdBzsU3.jpg',
                'thumbnail' => 'https://abkd-alpha-fdcpchannel-bucket.s3.ap-southeast-1.amazonaws.com/images/uzoIUCASiIl8uqdanHL9TPtqidAheTPtSRR3yvpT.png',
                'rating' => 'R16',
                'duration' => '84'
            ],
        ];

        foreach ($sample_films as $key => $films) {
            Film::create($films);
        }
    }
}
