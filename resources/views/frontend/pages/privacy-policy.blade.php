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
