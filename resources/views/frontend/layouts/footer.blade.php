<!-- start: Footer Section -->
<footer class="tj-footer-section footer-1 section-gap-x">
    <div class="bg-img" data-bg-image="{{ asset('frontAssets/images/footer/footer-bg.webp') }}"></div>
    <div class="footer-main-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_widget_wrapper">
                        <div class="footer-widget footer-col-1">
                            <div class="footer-logo">
                                <a href="{{ route('frontend.home') }}">
                                    <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Company Logo" />
                                </a>
                            </div>

                            <div class="footer-text">
                                <p>
                                    We deliver professional web development and IT solutions designed to help businesses grow online.
                                    Our team builds secure, scalable, and high-performance digital solutions tailored to your needs.
                                </p>
                            </div>
                        </div>

                        <div class="footer-widget widget-nav-menu">
                            <h5 class="title">Services</h5>
                            <ul>
                                @forelse (\App\Helpers\Helper::getServices() as $service)
                                    <li><a href="{{ route('frontend.services', $service->slug) }}">{{ $service->title }}</a></li>
                                @empty
                                    <li><a href="{{ route('frontend.services') }}">Services</a></li>
                                @endforelse
                            </ul>
                        </div>
                        <div class="footer-widget widget-nav-menu">
                            <h5 class="title">Resourses</h5>
                            <ul>
                                <li>
                                    <a href="{{ route('frontend.about') }}"><span>About Us</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.contact') }}"><span>Contact Us</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.projects') }}"><span>Portfolio</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.blogs') }}"><span>News</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.privacy') }}"><span>Privacy Policy</span></a>
                                </li>
                                <li>
                                    <a href="{{ route('frontend.terms') }}"><span>Terms and Conditions</span></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-widget widget-contact">
                            <h5 class="title">Contact Info</h5>
                            <div class="footer-contact-info">
                                <div class="contact-item">
                                    <span>{{ \App\Helpers\Helper::getCompanyAddress() }}</span>
                                </div>
                                <div class="contact-item">
                                    @php
                                        $phone = \App\Helpers\Helper::getCompanyPhone();
                                        // remove +, spaces, dashes, brackets
                                        $waPhone = preg_replace('/[^0-9]/', '', $phone);
                                    @endphp
                                    <a href="https://wa.me/{{ $waPhone }}" target="_blank">P: {{ $phone }}</a>
                                    <a href="mailto:{{ \App\Helpers\Helper::getCompanyEmail() }}">E: {{ \App\Helpers\Helper::getCompanyEmail() }}</a>
                                </div>
                                <div class="contact-item">
                                    <span><i class="tji-clock"></i> Mon-Sat 09am-09pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tj-copyright-area">
        <div class="copyright-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="copyright-content-area">
                            <div class="copyright-text">
                                <p><a href="{{ route('frontend.home') }}"
                                        target="_blank">{{ \App\Helpers\Helper::getCompanyName() }}</a> © {{ date('Y') }}, {{ \App\Helpers\Helper::getfooterText() }}</p>
                            </div>
                            <div class="copyright-menu">
                                <ul>
                                    <li><a href="{{ route('frontend.privacy') }}">Privacy & Policy</a></li>
                                    <li><a href="{{ route('frontend.terms') }}">Terms & Condition</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- end: Footer Section -->
