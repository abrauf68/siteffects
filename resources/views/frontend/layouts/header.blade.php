<!-- Preloader Start -->
<div class="preloader is-loading">
    <div class="loading-container">
        <div class="loading"></div>
        <div id="loading-icon"><img src="{{ asset(\App\Helpers\Helper::getFavicon()) }}" alt="Loading" />
        </div>
    </div>
</div>
<!-- Preloader end -->

<!-- back to top start -->
<div class="back-to-top-wrapper">
    <button id="back_to_top" type="button" class="back-to-top-btn">
        <span class="back_to_top_icon"><i class="tji-arrow-up-4"></i></span>
        <span class="back_to_top_text">Scroll Top</span>
    </button>
</div>
<!-- back to top end -->

<!-- start: Search Popup -->
<div class="search_popup">
    <div class="search_close">
        <button type="button" class="search_close_btn">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
                <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </button>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xxl-12">
                <div class="tj_search_wrapper">
                    <div class="search_form">
                        <form action="#">
                            <div class="search_input">
                                <h4 class="title">Search Projects, Service or Blog.</h4>
                                <div class="search-box">
                                    <input class="search-input-field" type="search" placeholder="Search here..."
                                        required="" />
                                    <button type="submit">
                                        <i class="tji-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search-popup-overlay"></div>
<!-- end: Search Popup -->

<!-- start: Offcanvas Menu -->
<div class="tj-offcanvas-area d-none d-lg-block">
    <div class="hamburger_bg"></div>
    <div class="hamburger_wrapper">
        <div class="hamburger_inner">
            <div class="hamburger_top d-flex align-items-center justify-content-between">
                <div class="hamburger_logo">
                    <a href="{{ route('frontend.home') }}" class="mobile_logo">
                        <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" />
                    </a>
                </div>
                <div class="hamburger_close">
                    <button class="hamburger_close_btn">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="offcanvas-text">
                <p>{{ \App\Helpers\Helper::getSidebarText() }}</p>
            </div>
            {{-- <div class="hamburger-search-area">
                <h5 class="hamburger-title">Search Now!</h5>
                <div class="hamburger_search">
                    <form method="get" action="index.html">
                        <button type="submit"><i class="tji-search"></i></button>
                        <input type="search" autocomplete="off" name="s" value=""
                            placeholder="Search here..." />
                    </form>
                </div>
            </div> --}}
            <div class="hamburger-infos">
                <h5 class="hamburger-title">Contact Info</h5>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="subtitle">Phone</span>

                        @php
                            $phone = \App\Helpers\Helper::getCompanyPhone();
                            // remove +, spaces, dashes, brackets
                            $waPhone = preg_replace('/[^0-9]/', '', $phone);
                        @endphp

                        <a class="contact-link" href="https://wa.me/{{ $waPhone }}" target="_blank">
                            {{ $phone }}
                        </a>
                    </div>

                    <div class="contact-item">
                        <span class="subtitle">Email</span>
                        <a class="contact-link"
                            href="mailto:{{ \App\Helpers\Helper::getCompanyEmail() }}">{{ \App\Helpers\Helper::getCompanyEmail() }}</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Location</span>
                        <span class="contact-link">{{ \App\Helpers\Helper::getCompanyAddress() }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hamburger-socials">
            <h5 class="hamburger-title">Follow Us</h5>
            <div class="social-links style-2">
                <ul>
                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyFacebook() }}" target="_blank">
                            <i class="tji-facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyLinkedin() }}" target="_blank">
                            <i class="tji-linkedin"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyInstagram() }}" target="_blank">
                            <i class="tji-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyTwitter() }}" target="_blank">
                            <i class="tji-x-twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyTiktok() }}" target="_blank">
                            <i class="tji-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: Offcanvas Menu -->

<!-- start: Hamburger Menu -->
<div class="hamburger-area d-lg-none">
    <div class="hamburger_bg"></div>
    <div class="hamburger_wrapper">
        <div class="hamburger_inner">
            <div class="hamburger_top d-flex align-items-center justify-content-between">
                <div class="hamburger_logo">
                    <a href="{{ route('frontend.home') }}" class="mobile_logo">
                        <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" />
                    </a>
                </div>
                <div class="hamburger_close">
                    <button class="hamburger_close_btn">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1L1 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M1 1L17 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
            <div class="hamburger_menu">
                <div class="mobile_menu"></div>
            </div>
            <div class="hamburger-infos">
                <h5 class="hamburger-title">Contact Info</h5>
                <div class="contact-info">
                    <div class="contact-item">
                        <span class="subtitle">Phone</span>
                        @php
                            $phone = \App\Helpers\Helper::getCompanyPhone();
                            // remove +, spaces, dashes, brackets
                            $waPhone = preg_replace('/[^0-9]/', '', $phone);
                        @endphp

                        <a class="contact-link" href="https://wa.me/{{ $waPhone }}" target="_blank">
                            {{ $phone }}
                        </a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Email</span>
                        <a class="contact-link"
                            href="mailto:{{ \App\Helpers\Helper::getCompanyEmail() }}">{{ \App\Helpers\Helper::getCompanyEmail() }}</a>
                    </div>
                    <div class="contact-item">
                        <span class="subtitle">Location</span>
                        <span class="contact-link">{{ \App\Helpers\Helper::getCompanyAddress() }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="hamburger-socials">
            <h5 class="hamburger-title">Follow Us</h5>
            <div class="social-links style-2">
                <ul>
                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyFacebook() }}" target="_blank">
                            <i class="tji-facebook"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyLinkedin() }}" target="_blank">
                            <i class="tji-linkedin"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyInstagram() }}" target="_blank">
                            <i class="tji-instagram"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyTwitter() }}" target="_blank">
                            <i class="tji-x-twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ \App\Helpers\Helper::getCompanyTiktok() }}" target="_blank">
                            <i class="tji-tiktok"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- end: Hamburger Menu -->

<!-- start: Header Area -->
<header class="header-area header-1 header-absolute">
    <div class="header-top d-lg-block d-none">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-top-content">
                        <p class="topbar-text"><i class="tji-spark"></i> Fast & Reliable IT Solution Services. <a
                                href="#">Join Now</a></p>
                        <div class="header-info">
                            <div class="info-item">
                                <span>
                                    <a href="{{ \App\Helpers\Helper::getCompanyFacebook() }}" target="_blank">
                                        <i class="tji-facebook"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="info-item">
                                <span>
                                    <a href="{{ \App\Helpers\Helper::getCompanyLinkedin() }}" target="_blank">
                                        <i class="tji-linkedin"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="info-item">
                                <span>
                                    <a href="{{ \App\Helpers\Helper::getCompanyInstagram() }}" target="_blank">
                                        <i class="tji-instagram"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="info-item">
                                <span>
                                    <a href="{{ \App\Helpers\Helper::getCompanyTwitter() }}" target="_blank">
                                        <i class="tji-x-twitter"></i>
                                    </a>
                                </span>
                            </div>

                            <div class="info-item">
                                <span>
                                    <a href="{{ \App\Helpers\Helper::getCompanyTiktok() }}" target="_blank">
                                        <i class="tji-tiktok"></i>
                                    </a>
                                </span>
                            </div>
                        </div>

                        {{-- <div class="header-info">
                            <div class="info-item">
                                <span><i class="tji-clock"></i></span>
                                <span>9 am to 6 pm [mon-sat]</span>
                            </div>
                            <div class="info-item">
                                <span><i class="tji-gear"></i></span>
                                <a href="contact.html">Support</a>
                            </div>
                            <div class="info-item">
                                <span><i class="tji-globe"></i></span>
                                <div class="tj-language">
                                    <span>English</span>
                                    <ul>
                                        <li>English</li>
                                        <li>Arabic</li>
                                        <li>Spanish</li>
                                    </ul>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrapper">
                        <!-- site logo -->
                        <div class="site_logo">
                            <a class="logo" href="{{ route('frontend.home') }}">
                                <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" />
                            </a>
                        </div>

                        <!-- navigation -->
                        <div class="menu-area d-none d-lg-inline-flex align-items-center">
                            <nav id="mobile-menu" class="mainmenu">
                                <ul>
                                    <li
                                        class="{{ request()->routeIs('frontend.home') ? 'current-menu-ancestor' : '' }}">
                                        <a href="{{ route('frontend.home') }}">Home</a>
                                    </li>
                                    <li class="">
                                        <a href="index.html">About</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="service.html">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="service-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="project.html">Projects</a>
                                        <ul class="sub-menu">
                                            <li><a href="project.html">Projects</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- header right info -->
                        <div class="header-right-item d-none d-lg-inline-flex">
                            {{-- <div class="header-search">
                                <button class="search">
                                    <i class="tji-search"></i>
                                </button>
                            </div> --}}
                            <div class="header-button d-xl-block d-none">
                                <a class="tj-primary-btn" href="contact.html">
                                    <span class="btn-text"><span>Get a Quote</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                            <!-- menu bar -->
                            <button class="menu_btn menu_offcanvas d-none d-lg-block">
                                <span class="cubes">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                        </div>

                        <!-- menu bar -->
                        <button class="menu_btn mobile_menu_bar d-lg-none">
                            <span class="cubes">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->

<!-- start: Header Area -->
<header class="header-area header-1 header-duplicate header-sticky">
    <div class="header-bottom">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="header-wrapper">
                        <!-- site logo -->
                        <div class="site_logo">
                            <a class="logo" href="{{ route('frontend.home') }}">
                                <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" />
                            </a>
                        </div>

                        <!-- navigation -->
                        <div class="menu-area d-none d-lg-inline-flex align-items-center">
                            <nav class="mainmenu">
                                <ul>
                                    <li class="{{ request()->routeIs('frontend.home') ? 'current-menu-ancestor' : '' }}">
                                        <a href="{{ route('frontend.home') }}">Home</a>
                                    </li>
                                    <li class="current-menu-ancestor">
                                        <a href="index.html">About</a>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="service.html">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="service.html">Services</a></li>
                                            <li><a href="service-details.html">Services Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="project.html">Projects</a>
                                        <ul class="sub-menu">
                                            <li><a href="project.html">Projects</a></li>
                                            <li><a href="project-details.html">Project Details</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-dropdown">
                                        <a href="blog.html">Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </nav>
                        </div>

                        <!-- header right info -->
                        <div class="header-right-item d-none d-lg-inline-flex">
                            {{-- <div class="header-search">
                                <button class="search">
                                    <i class="tji-search"></i>
                                </button>
                            </div> --}}
                            <div class="header-button d-xl-block d-none">
                                <a class="tj-primary-btn" href="contact.html">
                                    <span class="btn-text"><span>Get a Quote</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                            <!-- menu bar -->
                            <button class="menu_btn menu_offcanvas d-none d-lg-block">
                                <span class="cubes">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </span>
                            </button>
                        </div>

                        <!-- menu bar -->
                        <button class="menu_btn mobile_menu_bar d-lg-none">
                            <span class="cubes">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end: Header Area -->
