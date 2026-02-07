<!-- start: Footer Section -->
<footer class="tj-footer-section footer-1 section-gap-x">
    <div class="bg-img" data-bg-image="frontAssets/images/footer/footer-bg.webp"></div>
    <div class="footer-main-area">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="footer_widget_wrapper">
                        <div class="footer-widget footer-col-1">
                            <div class="footer-logo">
                                <a href="index.html">
                                    <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" />
                                </a>
                            </div>
                            <div class="footer-text">
                                <p>Every great solution start understand the time into learn about.</p>
                            </div>
                            <div class="download-buttons">
                                <a href="https://play.google.com/store/games"><img
                                        src="frontAssets/images/footer/google-play.webp" alt="" /></a>
                                <a href="https://www.apple.com/app-store/"><img
                                        src="frontAssets/images/footer/app-store.webp" alt="" /></a>
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
                                    <a href="contact.html"><span>About Us</span></a>
                                </li>
                                <li>
                                    <a href="contact.html"><span>Contact Us</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html"><span>Privacy Policy</span></a>
                                </li>
                                <li>
                                    <a href="blog-details.html"><span>Terms and Conditions</span></a>
                                </li>
                                <li>
                                    <a href="about.html"><span>Portfolio</span></a>
                                </li>
                                <li>
                                    <a href="blog.html"><span>News</span></a>
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
                                    <span><i class="tji-clock"></i> Mon-Sat 09am-08pm</span>
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
                                    <li><a href="contact.html">Privacy & Policy</a></li>
                                    <li><a href="contact.html">Terms & Condition</a></li>
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
