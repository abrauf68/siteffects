<?php

namespace Database\Seeders;

use App\Models\ServiceFaq;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            // Service ID 1: Web Development
            [
                'service_id' => 1,
                'question' => 'How long does it take to develop a custom website?',
                'answer' => 'The timeline depends on the complexity and features required. A standard business website typically takes 4–8 weeks, while more complex projects with custom functionality, integrations, or e-commerce capabilities may take 10–16 weeks or longer. We provide a detailed timeline during the discovery phase.',
            ],
            [
                'service_id' => 1,
                'question' => 'Will my website be mobile-friendly and responsive?',
                'answer' => 'Yes, all websites we develop are fully responsive and optimized for mobile, tablet, and desktop devices. We follow modern responsive design principles to ensure excellent user experience across all screen sizes.',
            ],
            [
                'service_id' => 1,
                'question' => 'Do you provide SEO optimization with web development?',
                'answer' => 'Yes, we build every website with SEO best practices in mind — clean code structure, semantic HTML, fast loading times, mobile optimization, proper heading hierarchy, meta tags, and optimized URLs.',
            ],
            [
                'service_id' => 1,
                'question' => 'What technologies do you use for web development?',
                'answer' => 'We use modern technologies such as HTML5, CSS3, JavaScript (ES6+), Tailwind CSS / Bootstrap, Laravel, Node.js, React.js / Vue.js, MySQL / PostgreSQL — chosen based on scalability, performance, and your long-term goals.',
            ],

            // Service ID 2: UI/UX Design & Branding
            [
                'service_id' => 2,
                'question' => 'What is the difference between UI and UX design?',
                'answer' => 'UI focuses on visual elements (colors, typography, buttons, layout), while UX is about the overall feel, usability, navigation, and how intuitive the experience is. We handle both to create beautiful and functional designs.',
            ],
            [
                'service_id' => 2,
                'question' => 'Do you create brand identities from scratch?',
                'answer' => 'Yes, we offer complete brand identity design including logo, color palette, typography, brand guidelines, business cards, and digital assets. We can also refresh existing brands.',
            ],
            [
                'service_id' => 2,
                'question' => 'Will I receive the source files for the designs?',
                'answer' => 'Yes, you will receive all source files (Figma, Adobe XD, Illustrator, etc.), high-resolution exports, and brand guidelines — giving you full ownership and flexibility for future updates.',
            ],
            [
                'service_id' => 2,
                'question' => 'How many revisions are included in the design process?',
                'answer' => 'We include multiple rounds of revisions in each phase (wireframes, high-fidelity designs, prototypes). The exact number is defined in the project scope, with the goal of complete client satisfaction.',
            ],

            // Service ID 3: Mobile App Development
            [
                'service_id' => 3,
                'question' => 'Do you develop apps for both iOS and Android?',
                'answer' => 'Yes, we build native apps (Swift for iOS, Kotlin/Java for Android) and cross-platform solutions (Flutter, React Native) depending on your timeline, budget, and requirements.',
            ],
            [
                'service_id' => 3,
                'question' => 'Will my app be published on the App Store and Google Play?',
                'answer' => 'Yes, we manage the full submission process — preparing assets, meeting guidelines, and handling the review process until your app is live on both platforms.',
            ],
            [
                'service_id' => 3,
                'question' => 'How do you ensure app performance and security?',
                'answer' => 'We optimize code, manage memory efficiently, use secure API communication, encrypt data, implement secure storage, and perform regular security & performance testing.',
            ],
            [
                'service_id' => 3,
                'question' => 'Can you integrate third-party services into the app?',
                'answer' => 'Yes, we integrate payment gateways, push notifications, maps, social logins, analytics, cloud storage, chat features, and many other APIs based on your needs.',
            ],

            // Service ID 4: SEO & Website Optimization
            [
                'service_id' => 4,
                'question' => 'How long does it take to see SEO results?',
                'answer' => 'SEO is a long-term strategy. Technical and on-page improvements can show early results in 1–3 months, while significant ranking and traffic growth often takes 4–12 months depending on competition and starting point.',
            ],
            [
                'service_id' => 4,
                'question' => 'Do you provide monthly SEO reports?',
                'answer' => 'Yes, we deliver detailed monthly reports covering keyword rankings, organic traffic, backlinks, site health, page speed, conversions, and actionable recommendations.',
            ],
            [
                'service_id' => 4,
                'question' => 'Do you optimize existing content or create new content?',
                'answer' => 'We do both — optimizing high-value existing pages and creating new content (blogs, service pages, pillar content) to target additional keywords and build authority.',
            ],
            [
                'service_id' => 4,
                'question' => 'Do you guarantee first-page rankings?',
                'answer' => 'No ethical SEO provider can guarantee specific rankings due to algorithm changes and competition. We guarantee transparent, white-hat practices and consistent progress toward your goals.',
            ],

            // Service ID 5: E-Commerce Development
            [
                'service_id' => 5,
                'question' => 'Which e-commerce platforms do you work with?',
                'answer' => 'We build custom solutions with Laravel + Filament/Livewire, Shopify, WooCommerce, or headless commerce (Next.js + backend) — chosen based on your scale and customization needs.',
            ],
            [
                'service_id' => 5,
                'question' => 'Do you integrate payment gateways and shipping providers?',
                'answer' => 'Yes, we integrate Stripe, PayPal, local gateways, and shipping providers (FedEx, DHL, local couriers) with real-time rates, tracking, and order management.',
            ],
            [
                'service_id' => 5,
                'question' => 'Can you add custom features to the online store?',
                'answer' => 'Yes — custom product configurators, subscriptions, loyalty programs, bulk ordering, advanced filters, multi-vendor support, wholesale pricing, and more.',
            ],
            [
                'service_id' => 5,
                'question' => 'Is the e-commerce site secure and PCI compliant?',
                'answer' => 'Yes, we implement HTTPS, secure authentication, PCI-DSS compliant payments, input validation, and regular vulnerability testing to protect your store and customers.',
            ],

            // Service ID 6: Website Maintenance & Support
            [
                'service_id' => 6,
                'question' => 'What is included in your website maintenance plans?',
                'answer' => 'Regular updates, security monitoring, malware scans, backups, performance optimization, bug fixes, minor content updates, and priority support.',
            ],
            [
                'service_id' => 6,
                'question' => 'How quickly do you respond to support requests?',
                'answer' => 'Most requests receive an initial response within 4–12 business hours. Critical issues (downtime, security) are handled within 1–4 hours depending on your plan.',
            ],
            [
                'service_id' => 6,
                'question' => 'Do you provide security monitoring and protection?',
                'answer' => 'Yes — we monitor threats, apply patches, use firewalls, scan for malware, and strengthen security to protect against current and emerging risks.',
            ],
            [
                'service_id' => 6,
                'question' => 'What happens if my website goes down?',
                'answer' => 'We provide 24/7 uptime monitoring. If downtime occurs, we are alerted immediately, troubleshoot, and restore from backups quickly to minimize disruption.',
            ],
        ];

        foreach ($faqs as $faq) {
            ServiceFaq::create($faq);
        }
    }
}
