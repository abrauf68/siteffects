<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'page_name' => 'home',
                'title' => 'Home',
                'slug' => Str::slug('Home'),
                'content' => null,
                'meta_title' => 'Best IT Services Company | Web & Software Solutions - Siteffect',
                'meta_description' => 'Siteffect Solutions offers top IT services, software development, web & mobile app solutions, and digital transformation to boost your business growth.',
                'meta_keywords' => 'IT services, software solutions, web development, mobile app development, digital transformation, IT company, Siteffect Solutions',
            ],
            [
                'page_name' => 'about',
                'title' => 'About',
                'slug' => Str::slug('About'),
                'content' => null,
                'meta_title' => 'About Siteffect Solutions | Leading IT Company for Software & Web',
                'meta_description' => 'Discover Siteffect Solutions, a leading IT company providing expert software development, web design, and digital solutions that drive business success.',
                'meta_keywords' => 'About Siteffect, IT company, software development, web development, digital solutions, technology services',
            ],
            [
                'page_name' => 'services',
                'title' => 'Services',
                'slug' => Str::slug('Services'),
                'content' => null,
                'meta_title' => 'IT Services & Software Solutions | Web & Mobile Apps - Siteffect',
                'meta_description' => 'Explore Siteffect Solutions IT services: custom software development, web & mobile apps, IT consulting, cloud solutions, and digital innovation services.',
                'meta_keywords' => 'IT services, software solutions, web development, mobile app development, IT consulting, cloud solutions, digital services',
            ],
            [
                'page_name' => 'projects',
                'title' => 'Projects',
                'slug' => Str::slug('Projects'),
                'content' => null,
                'meta_title' => 'Our IT Projects & Portfolio | Web & Software Solutions - Siteffect',
                'meta_description' => 'Check out Siteffect Solutions’ portfolio: successful IT projects, web development, software solutions, and digital transformation projects delivered worldwide.',
                'meta_keywords' => 'IT projects, software development portfolio, web projects, digital transformation projects, Siteffect Solutions',
            ],
            [
                'page_name' => 'blogs',
                'title' => 'Blogs',
                'slug' => Str::slug('Blogs'),
                'content' => null,
                'meta_title' => 'IT & Technology Blog | Software Development & Digital Trends - Siteffect',
                'meta_description' => 'Read Siteffect Solutions blog for latest IT news, software development tips, digital transformation insights, web & mobile app trends, and business solutions.',
                'meta_keywords' => 'IT blog, technology trends, software development tips, digital transformation insights, web and mobile apps, Siteffect Solutions',
            ],
            [
                'page_name' => 'contact',
                'title' => 'Contact',
                'slug' => Str::slug('Contact'),
                'content' => null,
                'meta_title' => 'Contact Siteffect Solutions | Top IT Services & Software Company',
                'meta_description' => 'Get in touch with Siteffect Solutions for IT services, software development, web & mobile app solutions, and expert digital transformation support.',
                'meta_keywords' => 'Contact Siteffect, IT services contact, software solutions contact, web development contact, digital transformation contact',
            ],
            [
                'page_name' => 'privacy',
                'title' => 'Privacy Policy',
                'slug' => Str::slug('Privacy Policy'),
                'content' => '<p>Effective Date: February 14, 2026</p>

                        <p>Welcome to <strong>Siteffect Solutions</strong> (“we”, “our”, or “us”). Your privacy is important to
                            us, and this
                            Privacy Policy explains how we collect, use, and protect your personal information when you use our
                            website and
                            services.</p>

                        <h2>1. Information We Collect</h2>
                        <p>We may collect the following types of information:</p>
                        <ul>
                            <li><strong>Personal Information:</strong> Name, email address, phone number, company details, and
                                any information
                                you provide when contacting us or filling forms.</li>
                            <li><strong>Non-Personal Information:</strong> Browser type, IP address, pages visited, time spent
                                on our website,
                                and other analytical data.</li>
                            <li><strong>Cookies & Tracking:</strong> We may use cookies, web beacons, and similar technologies
                                to enhance user
                                experience and collect analytical data.</li>
                        </ul>

                        <h2>2. How We Use Your Information</h2>
                        <p>Your information may be used for the following purposes:</p>
                        <ul>
                            <li>To provide and improve our services.</li>
                            <li>To communicate with you regarding inquiries, updates, and promotions.</li>
                            <li>To analyze website traffic and user behavior for better service experience.</li>
                            <li>To comply with legal obligations and prevent fraudulent activities.</li>
                        </ul>

                        <h2>3. Sharing Your Information</h2>
                        <p>We do not sell, trade, or rent your personal information to third parties. However, we may share
                            information in the
                            following cases:</p>
                        <ul>
                            <li>With trusted service providers who help us operate our website or provide services.</li>
                            <li>If required by law or to protect our legal rights and safety.</li>
                            <li>In connection with a business transaction such as a merger, acquisition, or sale of assets.</li>
                        </ul>

                        <h2>4. Cookies and Tracking Technologies</h2>
                        <p>Our website uses cookies to improve user experience, analyze site traffic, and customize content. You
                            can disable
                            cookies through your browser settings, but some website features may not function properly.</p>

                        <h2>5. Your Privacy Rights</h2>
                        <p>You have the right to access, update, or delete your personal information. You may also opt-out of
                            receiving
                            promotional communications at any time by contacting us at <a
                                href="mailto:siteffectsolutions@gmail.com">siteffectsolutions@gmail.com</a>.</p>

                        <h2>6. Data Security</h2>
                        <p>We implement appropriate technical and organizational measures to protect your personal information
                            from unauthorized
                            access, alteration, disclosure, or destruction. However, no method of transmission over the Internet
                            is 100% secure.
                        </p>

                        <h2>7. Third-Party Links</h2>
                        <p>Our website may contain links to third-party websites. We are not responsible for the privacy
                            practices of these
                            external sites. Please review their privacy policies before providing any personal information.</p>

                        <h2>8. Children’s Privacy</h2>
                        <p>Our services are not directed to children under 13 years of age. We do not knowingly collect personal
                            information
                            from children. If we become aware that we have collected data from a child, we will take steps to
                            delete it
                            promptly.</p>

                        <h2>9. Changes to This Privacy Policy</h2>
                        <p>We may update this Privacy Policy from time to time. The updated version will be posted on this page
                            with a revised
                            effective date. We encourage you to review this policy periodically.</p>

                        <h2>10. Contact Us</h2>
                        <p>If you have any questions or concerns about this Privacy Policy or our data practices, please contact
                            us:</p>
                        <p>
                            <strong>Siteffect Solutions</strong><br>
                            Email: <a href="mailto:siteffectsolutions@gmail.com">siteffectsolutions@gmail.com</a><br>
                            Phone: +92-310-3792073<br>
                            Address: Sector 11 E North Karachi 75850, Karachi, Pakistan
                        </p>',
                'meta_title' => 'Privacy Policy | Siteffect Solutions - IT & Software Company',
                'meta_description' => 'Read Siteffect Solutions privacy policy to learn how we protect your data while providing top IT services, software solutions, and digital services.',
                'meta_keywords' => 'Privacy Policy, data protection, IT services privacy, software solutions privacy, Siteffect Solutions',
            ],
            [
                'page_name' => 'terms',
                'title' => 'Terms & Conditions',
                'slug' => Str::slug('Terms & Conditions'),
                'content' => '<p>Effective Date: February 14, 2026</p>

                        <p>Welcome to <strong>Siteffect Solutions</strong> (“we”, “our”, or “us”). By using our website and services, you agree to comply with and be bound by the following Terms and Conditions. Please read them carefully.</p>

                        <h2>1. Acceptance of Terms</h2>
                        <p>By accessing or using our website, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions and our Privacy Policy. If you do not agree, please do not use our services.</p>

                        <h2>2. Use of Services</h2>
                        <ul>
                            <li>You agree to use our website and services only for lawful purposes and in a way that does not infringe the rights of others.</li>
                            <li>You shall not attempt to gain unauthorized access to our website, systems, or data.</li>
                            <li>We reserve the right to suspend or terminate access to our services at our discretion.</li>
                        </ul>

                        <h2>3. Intellectual Property</h2>
                        <p>All content, designs, graphics, logos, images, and software on this website are the property of <strong>Siteffect Solutions</strong> and are protected by intellectual property laws. You may not copy, reproduce, or distribute any content without our prior written consent.</p>

                        <h2>4. Third-Party Links</h2>
                        <p>Our website may contain links to third-party websites. We are not responsible for the content or practices of these external sites. Visiting these links is at your own risk.</p>

                        <h2>5. Disclaimer of Warranties</h2>
                        <p>Our website and services are provided “as is” without warranties of any kind, either express or implied. We do not guarantee the accuracy, reliability, or availability of our services.</p>

                        <h2>6. Limitation of Liability</h2>
                        <p>To the maximum extent permitted by law, <strong>Siteffect Solutions</strong> shall not be liable for any indirect, incidental, or consequential damages arising from your use of our website or services.</p>

                        <h2>7. Indemnification</h2>
                        <p>You agree to indemnify and hold harmless <strong>Siteffect Solutions</strong> and its affiliates, employees, and partners from any claims, damages, liabilities, or expenses arising out of your use of our website or violation of these Terms.</p>

                        <h2>8. Changes to Terms</h2>
                        <p>We may update these Terms and Conditions from time to time. The revised version will be posted on this page with an updated effective date. Your continued use of our website constitutes acceptance of the updated Terms.</p>

                        <h2>9. Governing Law</h2>
                        <p>These Terms and Conditions are governed by the laws of Pakistan. Any disputes arising under these Terms shall be subject to the exclusive jurisdiction of the courts of Karachi, Pakistan.</p>

                        <h2>10. Contact Us</h2>
                        <p>If you have any questions regarding these Terms and Conditions, please contact us:</p>
                        <p>
                            <strong>Siteffect Solutions</strong><br>
                            Email: <a href="mailto:siteffectsolutions@gmail.com">siteffectsolutions@gmail.com</a><br>
                            Phone: +92-310-3792073<br>
                            Address: Sector 11 E North Karachi 75850, Karachi, Pakistan
                        </p>',
                'meta_title' => 'Terms & Conditions | Siteffect Solutions IT Services & Software',
                'meta_description' => 'Review Siteffect Solutions terms and conditions for using our IT services, web and software solutions, and digital transformation offerings.',
                'meta_keywords' => 'Terms and Conditions, IT services terms, software solutions terms, Siteffect Solutions',
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }
}
