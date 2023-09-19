<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $topics = [
            [
                'title' => 'Laravel',
                'slug' => 'laravel',
            ],
            [
                'title' => 'Vue',
                'slug' => 'vue',
            ],
            [
                'title' => 'Tailwind CSS',
                'slug' => 'tailwindcss',
            ],
            [
                'title' => 'JavaScript',
                'slug' => 'javascript',
            ],
            [
                'title' => 'PHP',
                'slug' => 'php',
            ],
            [
                'title' => 'Python',
                'slug' => 'python',
            ],
            [
                'title' => 'Java',
                'slug' => 'java',
            ],
            [
                'title' => 'C/C++',
                'slug' => 'ccplusplus',
            ],
            [
                'title' => 'SQL',
                'slug' => 'sql',
            ],
            [
                'title' => 'HTML/CSS',
                'slug' => 'htmlcss',
            ],
            [
                'title' => 'Software Engineering',
                'slug' => 'softwareengineering',
            ],
        ];

        foreach ($topics as $topic) {
            Topic::create([
                'title' => $topic['title'],
                'slug' => $topic['slug'],
            ]);
        }
    }
}
