<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class BlogCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Frontend Development',
                'slug' => Str::slug('Frontend Development'),
                'description' => 'Learn everything about building responsive and interactive web interfaces using HTML, CSS, JavaScript, and popular frontend frameworks.',
                'image' => null,
            ],
            [
                'name' => 'Backend Development',
                'slug' => Str::slug('Backend Development'),
                'description' => 'Explore server-side technologies including PHP, Laravel, Node.js, databases, and APIs for building powerful backend systems.',
                'image' => null,
            ],
            [
                'name' => 'Web Development Tutorials',
                'slug' => Str::slug('Web Development Tutorials'),
                'description' => 'Step-by-step tutorials and mini-projects designed to enhance your coding skills and help you build real-world applications.',
                'image' => null,
            ],
            [
                'name' => 'Tools & Resources',
                'slug' => Str::slug('Tools & Resources'),
                'description' => 'Discover the best tools, libraries, and platforms to streamline your web development process and increase productivity.',
                'image' => null,
            ],
            [
                'name' => 'Web Performance & Security',
                'slug' => Str::slug('Web Performance & Security'),
                'description' => 'Master optimization and security techniques to build fast, reliable, and secure web applications.',
                'image' => null,
            ],
        ];

        foreach ($categories as $category) {
            BlogCategory::create($category);
        }
    }
}
