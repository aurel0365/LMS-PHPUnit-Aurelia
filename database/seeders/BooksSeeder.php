<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Books::create([
            'title' => 'The Silent Patient',
            'author' => 'Alex Michaelides',
            'publisher' => 'Celadon Books',
            'description' => 'A psychological thriller about a woman who shoots her husband and then stops speaking. Theo Faber, a forensic psychologist, becomes obsessed with her case and tries to uncover the truth.',
            'datePublished' => '2019-02-05',
            'genre' => 'mystery', // Sesuai enum dalam migrasi
            'price' => 150000,
            'stock' => 5,
            'onlineLink' => 'https://www.amazon.com/Silent-Patient-Alex-Michaelides/dp/1250301696'
        ]);

        Books::create([
            'title' => 'Educated',
            'author' => 'Tara Westover',
            'publisher' => 'Random House',
            'description' => 'A memoir that tells the story of a girl born to survivalists in rural Idaho who, after growing up in a family that doesn’t value formal education, decides to pursue an education against all odds.',
            'datePublished' => '2018-02-20',
            'genre' => 'biography', // Sesuai enum dalam migrasi
            'price' => 170000,
            'stock' => 7,
            'onlineLink' => 'https://www.amazon.com/Educated-Memoir-Tara-Westover/dp/0399590501'
        ]);

        Books::create([
            'title' => 'Dune',
            'author' => 'Frank Herbert',
            'publisher' => 'Chilton Books',
            'description' => 'A science fiction novel about the young Paul Atreides, whose noble family accepts the stewardship of the desert planet Arrakis.',
            'datePublished' => '1965-08-01',
            'genre' => 'science_fiction', // Sesuai enum dalam migrasi
            'price' => 200000,
            'stock' => 12,
            'onlineLink' => 'https://www.amazon.com/Dune-Frank-Herbert/dp/0441013597'
        ]);

        Books::create([
            'title' => 'To Kill a Mockingbird',
            'author' => 'Harper Lee',
            'publisher' => 'J.B. Lippincott & Co.',
            'description' => 'A novel set in the American South during the 1930s, focusing on themes of racial injustice and the loss of innocence.',
            'datePublished' => '1960-07-11',
            'genre' => 'fiction', // Sesuai enum dalam migrasi
            'price' => 180000,
            'stock' => 10,
            'onlineLink' => 'https://www.amazon.com/To-Kill-a-Mockingbird/dp/0061120081'
        ]);

        Books::create([
            'title' => 'The Immortal Life of Henrietta Lacks',
            'author' => 'Rebecca Skloot',
            'publisher' => 'Crown Publishing Group',
            'description' => 'The story of Henrietta Lacks, whose cancer cells were taken without her knowledge and used for scientific research.',
            'datePublished' => '2010-02-02',
            'genre' => 'nonfiction', // Sesuai enum dalam migrasi
            'price' => 160000,
            'stock' => 8,
            'onlineLink' => 'https://www.amazon.com/Immortal-Life-Henrietta-Lacks/dp/1400052181'
        ]);
    }
}
