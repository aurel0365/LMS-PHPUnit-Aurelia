<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Journal::create([
            'title' => 'Journal of Advanced AI Research',
            'author' => 'Dr. Samantha Green',
            'publisher' => 'AI Research Institute',
            'description' => 'A journal dedicated to exploring cutting-edge developments in artificial intelligence and machine learning.',
            'price' => 250000,
            'stock' => 12,
            'datePublished' => '2023-11-05',
            'volume' => 10,
            'series' => 3,
            'number' => 1,
            'onlineLink' => 'https://example.com/journal/ai-research',
        ]);

        Journal::create([
            'title' => 'Journal of Renewable Energy Technologies',
            'author' => 'Dr. Robert White',
            'publisher' => 'Green Energy Publications',
            'description' => 'A journal focusing on new technologies and innovations in renewable energy sources and sustainability practices.',
            'price' => 220000,
            'stock' => 18,
            'datePublished' => '2023-09-18',
            'volume' => 22,
            'series' => 4,
            'number' => 3,
            'onlineLink' => 'https://example.com/journal/renewable-energy',
        ]);

        Journal::create([
            'title' => 'International Journal of Business and Economics',
            'author' => 'Prof. James Lee',
            'publisher' => 'Global Economics Press',
            'description' => 'A journal exploring the latest research in business management, economic policies, and global markets.',
            'price' => 150000,
            'stock' => 10,
            'datePublished' => '2023-08-10',
            'volume' => 30,
            'series' => 6,
            'number' => 2,
            'onlineLink' => 'https://example.com/journal/business-economics',
        ]);
    }
}
