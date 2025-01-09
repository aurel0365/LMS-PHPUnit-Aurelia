<?php

namespace Database\Seeders;

use App\Models\FinalYearProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalYearProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinalYearProject::create([
            'title' => 'Mobile Application Development for Public Transportation',
            'author' => 'Michael Johnson',
            'publisher' => 'IMT University',
            'description' => 'This project focuses on the development of a mobile application that provides real-time information on public transportation, such as bus and train schedules, and seat availability.',
            'stock' => 6,
            'datePublished' => '2024-08-25',
            'onlineLink' => 'https://example.com/project/public-transportation-app',
            'catalogue_type' => 'final year project',
        ]);

        FinalYearProject::create([
            'title' => 'Smart Home Automation System Using IoT',
            'author' => 'Sarah Lee',
            'publisher' => 'IMT University',
            'description' => 'This project develops a smart home automation system using the Internet of Things (IoT), allowing users to control and monitor their home appliances remotely through a mobile app.',
            'stock' => 4,
            'datePublished' => '2023-11-10',
            'onlineLink' => 'https://example.com/project/smart-home-iot',
            'catalogue_type' => 'final year project',
        ]);

        FinalYearProject::create([
            'title' => 'Data Security in Cloud Computing: A Comprehensive Study',
            'author' => 'David Smith',
            'publisher' => 'IMT University',
            'description' => 'This project focuses on the challenges and solutions related to data security in cloud computing environments, exploring encryption, access control, and threat mitigation strategies.',
            'stock' => 5,
            'datePublished' => '2023-03-30',
            'onlineLink' => 'https://example.com/project/cloud-security',
            'catalogue_type' => 'final year project',
        ]);
    }
}
