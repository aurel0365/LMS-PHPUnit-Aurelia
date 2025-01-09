<?php

namespace Database\Seeders;

use App\Models\CD;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CD::create([
            'title' => 'Abbey Road',
            'author' => 'The Beatles',
            'publisher' => 'Apple Records',
            'description' => 'The Beatles’ iconic 1969 album, featuring classic tracks like "Come Together" and "Something." Abbey Road is widely regarded as one of the greatest albums of all time.',
            'price' => 250000,
            'stock' => 5,
            'datePublished' => '1969-09-26',
            'genre' => 'rock',
            'onlineLink' => 'https://www.amazon.com/Abbey-Road-Beatles/dp/B0017XK85W',
            'catalogue_type' => 'CD',
        ]);

        CD::create([
            'title' => 'Thriller',
            'author' => 'Michael Jackson',
            'publisher' => 'Epic Records',
            'description' => 'The best-selling album of all time, featuring the hit songs "Billie Jean," "Beat It," and "Thriller." Michael Jackson’s groundbreaking album revolutionized pop music and music videos.',
            'price' => 230000,
            'stock' => 6,
            'datePublished' => '1982-11-30',
            'genre' => 'pop',
            'onlineLink' => 'https://www.amazon.com/Thriller-Michael-Jackson/dp/B001EHA3DA',
            'catalogue_type' => 'CD',
        ]);

        CD::create([
            'title' => 'Back In Black',
            'author' => 'AC/DC',
            'publisher' => 'Atlantic Records',
            'description' => 'AC/DC’s legendary 1980 album, featuring the hit song "You Shook Me All Night Long." Back In Black is one of the best-selling albums of all time.',
            'price' => 210000,
            'stock' => 7,
            'datePublished' => '1980-07-25',
            'genre' => 'rock',
            'onlineLink' => 'https://www.amazon.com/Back-Black-AC-DC/dp/B001F5RYIW',
            'catalogue_type' => 'CD',
        ]);
    }
}
