<?php

namespace Database\Seeders;

use App\Models\Newspaper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewspaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Newspaper::create([
            'title' => 'Tech Trends Today',
            'author' => 'David Foster',
            'publisher' => 'Tech World Publications',
            'description' => 'A daily newspaper providing the latest updates, news, and analysis in the tech world.',
            'price' => 8000,
            'stock' => 200,
            'datePublished' => '2023-12-01',
            'onlineLink' => 'https://example.com/newspaper/tech-trends-today',
            'catalogue_type' => 'newspaper',
        ]);

        Newspaper::create([
            'title' => 'World Affairs Daily',
            'author' => 'Emma Clark',
            'publisher' => 'Global Affairs Media',
            'description' => 'A daily publication covering international political, social, and economic news with an analytical approach.',
            'price' => 15000,
            'stock' => 100,
            'datePublished' => '2023-11-25',
            'onlineLink' => 'https://example.com/newspaper/world-affairs-daily',
            'catalogue_type' => 'newspaper',
        ]);

        Newspaper::create([
            'title' => 'Sports Insight',
            'author' => 'Jack Wilson',
            'publisher' => 'Sports Network',
            'description' => 'A comprehensive sports newspaper delivering in-depth coverage of major global sports events, athletes, and teams.',
            'price' => 5000,
            'stock' => 80,
            'datePublished' => '2023-10-05',
            'onlineLink' => 'https://example.com/newspaper/sports-insight',
            'catalogue_type' => 'newspaper',
        ]);
    }
}
