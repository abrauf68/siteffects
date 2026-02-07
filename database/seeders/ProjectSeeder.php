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
            [
                'title' => 'EstiMate Pro',
                'slug' => Str::slug('EstiMate Pro'),
                'main_image' => null,
                'scroll_image' => null,
                'live_url' => 'https://estimatepro.com',
                'client' => 'EstiMate Pro',
                'technologies' => 'Laravel, Livewire, Stripe, MySQL',
                'completion_date' => Carbon::parse('2025-06-20'),
                'meta_title' => 'EstiMate Pro – Smart Estimation Platform',
                'meta_description' => 'Smart SaaS platform for automated project estimation and pricing.',
                'description' => '
<p>EstiMate Pro is a powerful SaaS platform designed to simplify and automate project estimation for businesses. The system focuses on accuracy, scalability, and performance, allowing companies to generate reliable estimates through structured surveys and intelligent pricing logic. Built with modern technologies, the platform ensures a smooth and secure user experience across all devices.</p>

<h2>Our Approach to Estimation Systems</h2>
<p>We followed a strategic development approach by understanding business workflows, designing scalable architecture, and implementing clean, maintainable code. The platform is optimized for speed, security, and long-term growth, ensuring businesses can manage clients, subscriptions, and estimates efficiently.</p>
',
                'features' => json_encode([
                    'Survey based estimation',
                    'Stripe subscriptions',
                    'Admin dashboard',
                    'PDF export'
                ]),
            ],

            [
                'title' => 'Facebook Lead Management System',
                'slug' => Str::slug('Facebook Lead Management System'),
                'main_image' => null,
                'scroll_image' => null,
                'live_url' => '',
                'client' => 'Marketing Agency',
                'technologies' => 'Laravel, Facebook Graph API, Bootstrap',
                'completion_date' => Carbon::parse('2025-04-10'),
                'meta_title' => 'Facebook Lead Management System',
                'meta_description' => 'Automated Facebook lead capture and management system.',
                'description' => '
<p>This project was built to centralize and automate Facebook lead handling for marketing teams. The system captures leads in real time and organizes them into a structured dashboard, enabling faster responses and better conversion rates.</p>

<h2>Lead Management Strategy</h2>
<p>Our approach focused on seamless API integration, efficient data handling, and a clean user interface. The system ensures leads are properly assigned, tracked, and followed up, helping businesses maximize their marketing efforts.</p>
',
                'features' => json_encode([
                    'Facebook API integration',
                    'Lead assignment',
                    'Status tracking',
                    'Notifications'
                ]),
            ],

            [
                'title' => 'Grand City Faisalabad CRM',
                'slug' => Str::slug('Grand City Faisalabad CRM'),
                'main_image' => null,
                'scroll_image' => null,
                'live_url' => 'https://grandcityfaisalabad.com',
                'client' => 'Grand City Faisalabad',
                'technologies' => 'Laravel, MySQL, AdminLTE',
                'completion_date' => Carbon::parse('2025-05-15'),
                'meta_title' => 'Grand City Faisalabad – Real Estate CRM',
                'meta_description' => 'CRM system for managing real estate leads and sales.',
                'description' => '
<p>This CRM system was developed to manage real estate leads, customers, and sales operations efficiently. It provides a centralized platform for tracking inquiries, managing properties, and monitoring sales performance.</p>

<h2>CRM Development Approach</h2>
<p>We designed the system with role-based access, data security, and scalability in mind. The platform ensures smooth operations for sales teams while providing management with clear insights and reporting.</p>
',
                'features' => json_encode([
                    'Lead management',
                    'Property listings',
                    'Sales tracking',
                    'Role-based access'
                ]),
            ],

            [
                'title' => 'Car Transport Quote System',
                'slug' => Str::slug('Car Transport Quote System'),
                'main_image' => null,
                'scroll_image' => null,
                'live_url' => '',
                'client' => 'Logistics Company',
                'technologies' => 'Laravel, BATS API, Google Maps',
                'completion_date' => Carbon::parse('2025-03-28'),
                'meta_title' => 'Car Transport Quote System',
                'meta_description' => 'Instant car transport quotes with distance-based pricing.',
                'description' => '
<p>The car transport quote system provides instant pricing based on distance, vehicle type, and delivery requirements. It simplifies the quotation process for both customers and logistics teams.</p>

<h2>Quotation System Workflow</h2>
<p>We implemented real-time distance calculation, API-based pricing logic, and a clean dashboard to manage quotes efficiently. The system is optimized for accuracy, speed, and ease of use.</p>
',
                'features' => json_encode([
                    'Distance calculation',
                    'API-based pricing',
                    'Quote dashboard',
                    'Admin controls'
                ]),
            ],
        ]);
    }
}
