<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Web Development',
                'slug' => Str::slug('Web Development'),
                'image' => null,
                'icon' => 'tji-computer',
                'meta_title' => 'Professional Web Development Services',
                'meta_description' => 'We build fast, secure, and scalable websites tailored to your business needs.',
                'meta_keywords' => 'web development services, custom website development, professional web development company, full stack web developer, responsive website design, business website development, enterprise web solutions, PHP development services, Laravel development company, frontend and backend development, scalable web applications, website development agency',
                'description' => '
<p>At Siteffects Solutions, we specialize in creating websites that are not only visually appealing but also highly functional and optimized for performance. Our web development process focuses on clean, maintainable code, responsive design, and SEO-friendly structures that ensure your website performs seamlessly across all devices. By combining the latest technologies with innovative solutions, we deliver websites that meet your business goals and provide a superior user experience. From startups to large enterprises, our custom web solutions are tailored to fit your unique needs while ensuring scalability, security, and speed.</p>

<h2>Our Approach to Web Development</h2>
<p>We follow a strategic approach to web development that prioritizes both user experience and business objectives. Each project begins with understanding your requirements, planning the architecture, and implementing best coding practices. Our team ensures that your website is not only visually attractive but also fast, secure, and easily maintainable. We focus on features that drive engagement, optimize performance, and ensure your website is fully optimized for search engines, providing long-term growth and digital success.</p>
',
                'features' => json_encode([
                    'Custom Website Development',
                    'Responsive & Mobile Friendly',
                    'Fast & SEO Optimized',
                    'Secure Code & Best Practices'
                ]),
                'position' => 1,
                'is_featured' => '1',
            ],
            [
                'title' => 'UI/UX Design & Branding',
                'slug' => Str::slug('UI/UX Design & Branding'),
                'image' => null,
                'icon' => 'tji-computer',
                'meta_title' => 'Creative UI/UX Design & Branding',
                'meta_description' => 'Designing visually stunning interfaces and intuitive experiences that engage your users.',
                'meta_keywords' => 'UI UX design services, professional UI designer, UX design agency, branding services, brand identity design, logo design services, website UI design, mobile app UI UX design, user experience optimization, creative branding agency, digital product design, modern website design company',
                'description' => '
<p>Our UI/UX design services at Siteffects Solutions focus on creating engaging, user-friendly interfaces that capture attention and drive action. We combine creativity with research to design experiences that are intuitive, visually appealing, and aligned with your brand identity. Each design is tailored to your audience, ensuring consistency, clarity, and usability across all digital touchpoints. By integrating branding strategies into UI/UX design, we help your business build credibility, recognition, and loyalty while maximizing conversions and engagement.</p>

<h2>Designing Experiences That Convert</h2>
<p>We craft interfaces that are not only beautiful but also functional. Our process includes wireframing, prototyping, and iterative design to ensure every interaction is seamless and intuitive. From branding elements to navigation flow, we focus on user-centric design principles that enhance satisfaction, increase engagement, and reinforce your brand message. Our designs aim to connect with your audience and provide experiences that convert visitors into loyal customers.</p>
',
                'features' => json_encode([
                    'User Interface Design',
                    'User Experience Optimization',
                    'Brand Identity Design',
                    'Interactive Prototypes'
                ]),
                'position' => 2,
                'is_featured' => '1',
            ],
            [
                'title' => 'Mobile App Development',
                'slug' => Str::slug('Mobile Applications Development'),
                'image' => null,
                'icon' => 'tji-computer',
                'meta_title' => 'Mobile App Development Services',
                'meta_description' => 'Building high-performance mobile apps for iOS and Android to grow your reach.',
                'meta_keywords' => 'mobile app development services, Android app development, iOS app development, Flutter app development, React Native development, custom mobile application development, hybrid app development company, enterprise mobile app solutions, startup app development, cross platform app development, mobile software development company',
                'description' => '
<p>We develop robust and high-performance mobile applications tailored for iOS and Android platforms. At Siteffects Solutions, our focus is on delivering apps that are fast, reliable, and user-friendly. We leverage modern frameworks and technologies to ensure smooth functionality, scalability, and security. Each application is designed with the end-user in mind, providing seamless experiences that keep users engaged. Whether it’s a consumer-facing app or a business solution, our mobile applications help you expand your reach and drive growth in the competitive mobile market.</p>

<h2>Our Mobile Development Process</h2>
<p>Our approach involves detailed planning, prototyping, development, and testing to ensure high-quality results. We prioritize performance, security, and cross-platform compatibility to deliver apps that meet your business objectives. By incorporating intuitive design and seamless functionality, our mobile solutions enhance user engagement, satisfaction, and retention, giving your business a competitive edge in the mobile space.</p>
',
                'features' => json_encode([
                    'iOS & Android Apps',
                    'Cross-Platform Solutions',
                    'App Store Deployment',
                    'Performance Optimization'
                ]),
                'position' => 3,
                'is_featured' => '1',
            ],
            [
                'title' => 'SEO & Website Optimization',
                'slug' => Str::slug('SEO & Website Optimization'),
                'image' => null,
                'icon' => 'tji-search',
                'meta_title' => 'SEO & Website Optimization Services',
                'meta_description' => 'Optimizing websites to rank higher, drive traffic, and boost conversions.',
                'meta_keywords' => 'SEO services, search engine optimization company, technical SEO services, on page SEO optimization, off page SEO services, website speed optimization, Google ranking services, ecommerce SEO services, local SEO services, digital marketing agency, organic traffic growth, website performance optimization',
                'description' => '
<p>At Siteffects Solutions, we help businesses increase their online visibility and drive organic traffic through effective SEO strategies and website optimization. Our services focus on improving search engine rankings, enhancing page load speed, and ensuring optimal user experience. We analyze your website structure, content, and performance to identify areas of improvement. By implementing best practices and tailored strategies, we help your website attract the right audience, generate leads, and achieve measurable results.</p>

<h2>Optimizing for Performance and Rankings</h2>
<p>Our optimization process includes on-page and technical SEO, keyword research, and performance tuning. We ensure your website is fast, secure, and optimized for search engines. By focusing on both user experience and search visibility, we create websites that perform efficiently, rank higher, and convert visitors into loyal customers. Our goal is to deliver sustainable online growth and long-term digital success.</p>
',
                'features' => json_encode([
                    'On-Page SEO',
                    'Technical SEO',
                    'Performance & Speed Optimization',
                    'Keyword Research & Analytics'
                ]),
                'position' => 4,
                'is_featured' => '1',
            ],
            [
                'title' => 'E-Commerce Development',
                'slug' => Str::slug('E-Commerce Development'),
                'image' => null,
                'icon' => 'tji-computer',
                'meta_title' => 'E-Commerce Website Development',
                'meta_description' => 'Creating powerful online stores that deliver seamless shopping experiences.',
                'meta_keywords' => 'ecommerce development services, online store development, Shopify development, WooCommerce development, custom ecommerce solutions, ecommerce website design, multivendor ecommerce platform, B2B ecommerce development, payment gateway integration, scalable ecommerce solutions, ecommerce app development, professional online store developers',
                'description' => '
<p>Siteffects Solutions builds feature-rich e-commerce websites that provide seamless shopping experiences. Our solutions are designed to drive sales, improve user engagement, and offer smooth checkout processes. We integrate secure payment gateways, inventory management, and customer-friendly navigation to create a store that meets your business needs. Our e-commerce websites are responsive, fast, and optimized for both search engines and users, helping your brand grow online effectively.</p>

<h2>Building Stores That Sell</h2>
<p>We focus on designing and developing online stores that convert visitors into customers. From product listings to secure checkout, every aspect is optimized for performance and usability. Our e-commerce solutions include custom features, third-party integrations, and analytics tracking to ensure your store scales with your business and delivers measurable growth.</p>
',
                'features' => json_encode([
                    'Custom Online Stores',
                    'Payment Gateway Integration',
                    'Shopping Cart & Checkout Optimization',
                    'Inventory Management'
                ]),
                'position' => 5,
                'is_featured' => '0',
            ],
            [
                'title' => 'Website Maintenance & Support',
                'slug' => Str::slug('Website Maintenance & Support'),
                'image' => null,
                'icon' => 'tji-consulting',
                'meta_title' => 'Website Maintenance & Support Services',
                'meta_description' => 'Ensuring your website stays secure, updated, and fully functional 24/7.',
                'meta_keywords' => 'website maintenance services, website support services, WordPress maintenance, Laravel website support, website security updates, website performance monitoring, technical website support, website management services, website bug fixing, monthly website maintenance plans, website backup services, ongoing website support',
                'description' => '
<p>We provide reliable website maintenance and support to ensure your site remains secure, updated, and fully operational at all times. Siteffects Solutions monitors your website, fixes issues promptly, and implements improvements to maintain peak performance. Our services include regular updates, security checks, and troubleshooting to prevent downtime and ensure a seamless experience for your users. We aim to protect your investment and maintain the credibility of your online presence.</p>

<h2>Ensuring Smooth Website Operations</h2>
<p>Our maintenance approach focuses on performance monitoring, bug fixes, and technical support. We provide timely updates, optimize performance, and address any issues proactively. By keeping your website secure, fast, and functional, we help your business maintain a strong online presence and deliver consistent user experiences that support growth and engagement.</p>
',
                'features' => json_encode([
                    'Regular Updates',
                    'Security Monitoring',
                    'Bug Fixes & Troubleshooting',
                    'Performance Checks'
                ]),
                'position' => 6,
                'is_featured' => '1',
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
