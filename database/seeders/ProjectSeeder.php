<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([

            /*
            |--------------------------------------------------------------------------
            | Very Pro Store
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Very Pro Store – E-Commerce Marketplace',
                'slug' => Str::slug('Very Pro Store – E-Commerce Marketplace'),
                'main_image' => null,
                'scroll_image' => 'uploads/projects/veryprostore.webp',
                'live_url' => 'https://veryprostore.com/',
                'client' => 'Very Pro Store',
                'technologies' => 'Laravel, E-commerce, UI/UX, Payment Integration',
                'completion_date' => Carbon::parse('2025-08-15'),
                'meta_title' => 'Very Pro Store – Online Shopping Marketplace',
                'meta_description' => 'A modern e-commerce marketplace offering electronics, fashion, home, and lifestyle products with secure checkout.',
                'description' => '
<p>Very Pro Store is a modern multi-category e-commerce marketplace designed to provide a smooth and reliable online shopping experience. The platform allows users to browse products across multiple categories including electronics, fashion, home essentials, and accessories.</p>

<h2>E-Commerce Strategy</h2>
<p>The store was structured with a focus on product discoverability, fast navigation, and a secure checkout flow. Performance optimization and customer trust were key priorities throughout the development process.</p>
',
                'features' => json_encode([
                    'Multi-category product catalog',
                    'Secure checkout system',
                    'Customer account management',
                    'Responsive shopping experience',
                ]),
                'position' => 1,
                'is_featured' => '1',
            ],

            /*
            |--------------------------------------------------------------------------
            | Abdul Rauf Portfolio
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Abdul Rauf – Developer Portfolio',
                'slug' => Str::slug('Abdul Rauf – Developer Portfolio'),
                'main_image' => null,
                'scroll_image' => 'uploads/projects/rauf-portfolio.webp',
                'live_url' => 'https://rauf.jewellaa.com/',
                'client' => 'Abdul Rauf',
                'technologies' => 'Laravel, PHP, JavaScript, Full Stack Development',
                'completion_date' => Carbon::parse('2025-09-10'),
                'meta_title' => 'Abdul Rauf – Full Stack Web Developer Portfolio',
                'meta_description' => 'Personal portfolio showcasing web development services, projects, and technical expertise.',
                'description' => '
<p>This personal portfolio website highlights the professional work and services of Abdul Rauf as a full stack web developer. The platform showcases completed projects, technical skills, and offered development services.</p>

<h2>Portfolio Focus</h2>
<p>The site emphasizes clarity, performance, and professionalism while allowing potential clients to easily explore services, past work, and contact information.</p>
',
                'features' => json_encode([
                    'Project showcase',
                    'Service listings',
                    'Clean UI/UX',
                    'Contact & inquiry system',
                ]),
                'position' => 2,
                'is_featured' => '1',
            ],

            /*
            |--------------------------------------------------------------------------
            | YourKit.pro – Workwear Store
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'YourKit Pro – Custom Workwear Store',
                'slug' => Str::slug('YourKit Pro – Custom Workwear Store'),
                'main_image' => null,
                'scroll_image' => 'uploads/projects/yourkit-pro.webp',
                'live_url' => 'https://yourkit.pro/',
                'client' => 'YourKit Pro',
                'technologies' => 'E-commerce, Product Customization, UI/UX',
                'completion_date' => Carbon::parse('2025-10-05'),
                'meta_title' => 'YourKit Pro – Custom Construction Workwear',
                'meta_description' => 'Online store offering custom branded construction and workwear apparel for crews and professionals.',
                'description' => '
<p>YourKit Pro is an online e-commerce platform specializing in custom construction and workwear apparel. The store allows businesses and crews to order branded shirts, hoodies, jackets, and safety wear in bulk.</p>

<h2>Customization & Ordering</h2>
<p>The platform focuses on product customization, bulk ordering, and a smooth purchasing experience tailored for professional teams and construction companies.</p>
',
                'features' => json_encode([
                    'Custom branded apparel',
                    'Bulk ordering system',
                    'Workwear product catalog',
                    'Business-focused checkout flow',
                ]),
                'position' => 3,
                'is_featured' => '1',
            ],

            /*
            |--------------------------------------------------------------------------
            | Afrah Travel
            |--------------------------------------------------------------------------
            */
            [
                'title' => 'Afrah Travel – Umrah & Flight Booking',
                'slug' => Str::slug('Afrah Travel – Umrah & Flight Booking'),
                'main_image' => null,
                'scroll_image' => 'uploads/projects/afrahtravel-pk-sasta-ticket.webp',
                'live_url' => 'https://afrahtravel.com.pk/sasta_ticket/',
                'client' => 'Afrah Travel & Tours',
                'technologies' => 'Travel Booking, CMS, Service-Based Website',
                'completion_date' => Carbon::parse('2025-11-20'),
                'meta_title' => 'Afrah Travel – Affordable Umrah & Air Tickets',
                'meta_description' => 'Travel agency website providing Umrah packages, air ticket booking, and travel services in Pakistan.',
                'description' => '
<p>Afrah Travel is a Pakistan-based travel agency website offering affordable Umrah packages, international flight bookings, and travel assistance services. The platform helps users easily explore travel options and connect with agents.</p>

<h2>Travel Services Approach</h2>
<p>The website is designed to build trust, clearly present packages, and simplify inquiries for religious and international travel services.</p>
',
                'features' => json_encode([
                    'Umrah & religious packages',
                    'Flight booking assistance',
                    'Travel inquiry system',
                    'Service-focused content layout',
                ]),
                'position' => 4,
                'is_featured' => '1',
            ],

        ]);
    }
}
