@extends('frontend.layouts.master')

@section('title', $page->title)
@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('author', $page->author)

@section('css')
@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <section class="tj-blog-section mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-2"></div>
                @if ($page->content)
                    <div class="col-lg-8">
                        {!! $page->content !!}
                    </div>
                @else
                    <div class="col-lg-8">
                        <p>Effective Date: February 14, 2026</p>

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
                        </p>
                    </div>
                @endif
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>

    @include('frontend.pages.sections.cta')
@endsection

@section('script')
@endsection
