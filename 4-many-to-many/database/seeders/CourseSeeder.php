<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            'title' => [
                'PHP, Laravel, and Tailwind CSS: Building Modern Web Applications',
                'AlpineJS for Beginners: Learn the Basics of Alpine.js to Add Interactivity to Your Web Pages',
                'Vue.js for Laravel Developers: Learn How to Use Vue.js to Build Modern Single-Page Applications with Laravel',
                'Inertia.js for Laravel Developers: Learn How to Use Inertia.js to Build Fast and Responsive Laravel Applications',
                'Laravel, Vue.js, and Inertia.js: The Complete Guide to Building Modern Web Applications',
                'Mastering the Laravel Ecosystem: Learn How to Use Laravel, Vue.js, Inertia.js, and Tailwind CSS to Build World-Class Web Applications',
                'Building a Real-World Blog with Laravel, Vue.js, and Inertia.js',
                'E-Commerce with Laravel, Vue.js, and Inertia.js: Build a Complete E-Commerce Website from Scratch',
                'Laravel, Vue.js, and Inertia.js for Beginners: Learn How to Build Modern Web Applications from Scratch',
                'Advanced Laravel, Vue.js, and Inertia.js: Learn How to Build Complex Web Applications with Laravel, Vue.js, and Inertia.js',
                'Laravel, Vue.js, and Inertia.js Best Practices: Learn How to Build Secure, Scalable, and Maintainable Web Applications with Laravel, Vue.js, and Inertia.js',
            ],
        ];

        foreach ($courses['title'] as $courseTitle) {
            Course::create([
                'title' => $courseTitle,
            ]);
        }
    }
}
