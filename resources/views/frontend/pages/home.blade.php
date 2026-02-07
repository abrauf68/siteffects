@extends('frontend.layouts.master')

@section('title', 'Home')

@section('css')

@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <!-- start: Banner Section -->
    <section class="tj-banner-section fix">
        <div class="hero-bg" data-bg-image="frontAssets/images/hero/hero-bg.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-6 col-xl-5 col-lg-6">
                    <div class="banner-content">
                        <span class="sub-title tj-fade-anim" data-duration="0.5">[ Siteffect Solutions ]</span>
                        <h1 class="banner-title tj-split-text-4">Innovative Tech Solutions for Growing Businesses</h1>
                        <div class="btn-area tj-fade-anim" data-delay=".6">
                            <a class="tj-primary-btn" href="service.html">
                                <span class="btn-text"><span>Explore Services</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                            </a>
                            <a class="number" href="tel:18883338181"><i class="tji-phone-2"></i><span>+1 (888)
                                    333-8181</span></a>
                        </div>
                        <div class="list-area tj-fade-anim" data-delay=".6" data-duration="1" data-direction="left">
                            <ul class="list-style-1">
                                <li>
                                    <span><i class="tji-check"></i></span>Innovate Smarter
                                </li>
                                <li>
                                    <span><i class="tji-check"></i></span>Technology Simplified
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-7 col-lg-6">
                    <div class="banner-img-area">
                        {{-- <div class="banner-img tj-fade-anim" data-delay="0.3" data-direction="right">
                      <img src="frontAssets/images/hero/hero-img.png" alt="Image" />
                    </div> --}}
                        <div class="banner-img tj-fade-anim" data-delay="0.3" data-direction="right">
                            <video autoplay muted loop playsinline class="w-100">
                                <source src="frontAssets/images/hero/hero-vid3.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>

                        <div class="trusted tj-bounce tj-fade-anim" data-delay="1" data-direction="left">
                            <span class="icon"><i class="tji-shield"></i></span>
                            <span class="text">Trusted by 800+ Tech Giants.</span>
                        </div>
                        <div class="customers-box tj-fade-anim" data-delay="0.6" data-direction="right"
                            style="translate: none;rotate: none;scale: none;transform: translate(-45px, 15px);opacity: 1;">
                            <div class="customers">
                                <ul>
                                    <li><img src="frontAssets/images/testimonial/client-1.webp" alt="Image" /></li>
                                    <li><img src="frontAssets/images/testimonial/client-2.webp" alt="Image" /></li>
                                    <li><img src="frontAssets/images/testimonial/client-3.webp" alt="Image" /></li>
                                    <li><img src="frontAssets/images/testimonial/client-4.webp" alt="Image" /></li>
                                </ul>
                            </div>
                            <div class="customers-bottom">
                                <div class="rating-area">
                                    <div class="customers-number">4.9</div>
                                    <div class="star-ratings">
                                        <div class="fill-ratings" style="width: 90%">
                                            <span>★★★★★</span>
                                        </div>
                                        <div class="empty-ratings">
                                            <span>★★★★★</span>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="customers-text">Based on 600+ Google Reviews.</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-scroll tj-fade-anim" data-delay="1.2" data-direction="top">
            <a href="#client" class="scroll-down">
                <span class="text">Scroll Down</span>
                <span class="icon"><i class="tji-arrow-down-2"></i></span>
            </a>
        </div>
    </section>
    <!-- end: Banner Section -->

    <!-- start: Client Section -->
    <section id="client" class="tj-client-section section-gap-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="client-content tj-fade-anim" data-delay="0.1">
                        <h5 class="sec-title">Join Over <span>1000+</span> Companies with Siteffects</h5>
                    </div>
                    <div class="swiper client-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="frontAssets/images/brands/brand-1.webp" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="frontAssets/images/brands/brand-2.webp" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="frontAssets/images/brands/brand-3.webp" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="frontAssets/images/brands/brand-4.webp" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="frontAssets/images/brands/brand-5.webp" alt="Image" />
                                </div>
                            </div>
                            <div class="swiper-slide client-item">
                                <div class="client-logo">
                                    <img src="frontAssets/images/brands/brand-6.webp" alt="Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Client Section -->

    <!-- start: Service Section -->
    <div class="tj-service-section section-gap">
        <div class="container">
            <div class="row rg-30">
                <div class="col-lg-4 col-md-6">
                    <div class="sec-heading mt-30 mb-0 tj-fade-anim" data-delay=".1" data-direction="bottom">
                        <span class="sub-title tj-fade-anim">[ Explore Services ]</span>
                        <h2 class="sec-title tj-split-text-1">Reliable IT Solution for a Smarter.</h2>
                        <a class="tj-primary-btn mt-20 d-md-inline-flex d-none" href="service.html">
                            <span class="btn-text"><span>Learn More</span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item tj-fade-anim" data-delay="0.3" data-direction="bottom">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-computer"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">Managed IT Services</a></h4>
                                <p class="desc">Comprehensive IT management, including monitoring, maintenance.</p>
                            </div>
                            <div class="service-list">
                                <ul class="list-style-2">
                                    <li><i class="tji-check-2"></i>24/7 system monitoring</li>
                                    <li><i class="tji-check-2"></i>IT support & troubleshooting</li>
                                    <li><i class="tji-check-2"></i>Remote IT assistance</li>
                                </ul>
                            </div>
                        </div>
                        <span class="item-count">01.</span>
                        <div class="service-btn">
                            <a class="tj-text-btn" href="service-details.html">
                                <span class="btn-inner">
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    <span class="btn-text"><span>Learn More</span></span>
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item tj-fade-anim" data-delay="0.5" data-direction="bottom">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-cloud"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">Cloud Computing</a></h4>
                                <p class="desc">Scalable cloud-based services, including migration, storage, and
                                    security.</p>
                            </div>
                            <div class="service-list">
                                <ul class="list-style-2">
                                    <li><i class="tji-check-2"></i>Scalable cloud storage</li>
                                    <li><i class="tji-check-2"></i>SaaS, PaaS, and IaaS integration</li>
                                    <li><i class="tji-check-2"></i>Hybrid & multi-cloud</li>
                                </ul>
                            </div>
                        </div>
                        <span class="item-count">02.</span>
                        <div class="service-btn">
                            <a class="tj-text-btn" href="service-details.html">
                                <span class="btn-inner">
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    <span class="btn-text"><span>Learn More</span></span>
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item tj-fade-anim" data-delay="0.1" data-direction="bottom">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-cybersecurity"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">Cybersecurity Solutions</a></h4>
                                <p class="desc">Advanced security measures, including firewall protection, threat
                                    detection.</p>
                            </div>
                            <div class="service-list">
                                <ul class="list-style-2">
                                    <li><i class="tji-check-2"></i>Firewall & network security</li>
                                    <li><i class="tji-check-2"></i>Threat detection & prevention</li>
                                    <li><i class="tji-check-2"></i>Endpoint protection</li>
                                </ul>
                            </div>
                        </div>
                        <span class="item-count">03.</span>
                        <div class="service-btn">
                            <a class="tj-text-btn" href="service-details.html">
                                <span class="btn-inner">
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    <span class="btn-text"><span>Learn More</span></span>
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item tj-fade-anim" data-delay="0.3" data-direction="bottom">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-consulting"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">IT Consulting & Strategy</a></h4>
                                <p class="desc">Expert guidance to optimize IT infrastructure, streamline operations, and
                                    drive.</p>
                            </div>
                            <div class="service-list">
                                <ul class="list-style-2">
                                    <li><i class="tji-check-2"></i>Transformation planning</li>
                                    <li><i class="tji-check-2"></i>IT infrastructure optimization</li>
                                    <li><i class="tji-check-2"></i>Risk assessment</li>
                                </ul>
                            </div>
                        </div>
                        <span class="item-count">04.</span>
                        <div class="service-btn">
                            <a class="tj-text-btn" href="service-details.html">
                                <span class="btn-inner">
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    <span class="btn-text"><span>Learn More</span></span>
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item tj-fade-anim" data-delay="0.5" data-direction="bottom">
                        <div class="service-inner">
                            <div class="service-icon">
                                <i class="tji-network"></i>
                            </div>
                            <div class="service-content">
                                <h4 class="title"><a href="service-details.html">Network Infrastructure</a></h4>
                                <p class="desc">Expert guidance to optimize IT infrastructure, streamline operations, and
                                    drive.</p>
                            </div>
                            <div class="service-list">
                                <ul class="list-style-2">
                                    <li><i class="tji-check-2"></i>Transformation planning</li>
                                    <li><i class="tji-check-2"></i>IT infrastructure optimization</li>
                                    <li><i class="tji-check-2"></i>Risk assessment</li>
                                </ul>
                            </div>
                        </div>
                        <span class="item-count">05.</span>
                        <div class="service-btn">
                            <a class="tj-text-btn" href="service-details.html">
                                <span class="btn-inner">
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    <span class="btn-text"><span>Learn More</span></span>
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-md-none text-center mt-40">
                <a class="tj-primary-btn" href="service.html">
                    <span class="btn-text"><span>Learn More</span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end: Service Section -->

    <!-- start: About Section -->
    <section class="tj-about-section fix section-gap section-gap-x">
        <div class="bg-img" data-bg-image="frontAssets/images/bg/common-bg.webp"></div>
        <div class="container">
            <div class="row rg-30">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about-left tj-fade-anim" data-delay=".1" data-direction="left">
                        <div class="about-img">
                            <img src="frontAssets/images/about/about-img-1.webp" alt="Image" />
                        </div>
                        <div class="about-left-bottom">
                            <div class="experience-area tj-fade-anim" data-delay=".2">
                                <span class="exp-badge">EXPERIENCE</span>
                                <div class="countup-item">
                                    <div class="inline-content">
                                        <span class="counter">20</span>
                                        <span class="count-plus"><sup>+</sup></span>
                                    </div>
                                    <span class="count-text">Years of Excellence in IT Solutions Company.</span>
                                </div>
                            </div>
                            <div class="author-area tj-fade-anim" data-delay=".3">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="frontAssets/images/testimonial/client-1.webp" alt="Image" />
                                    </div>
                                    <div class="author-text">
                                        <h6 class="author-name">Burdee Nicolas</h6>
                                        <span>Co. Founder</span>
                                    </div>
                                </div>
                                <div class="signature">
                                    <img src="frontAssets/images/about/signature.webp" alt="Image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-content-area tj-fade-anim" data-delay=".1" data-direction="right">
                        <div class="sec-heading">
                            <span class="sub-title tj-fade-anim">[ About Tekmino ]</span>
                            <h2 class="sec-title tj-split-text-1">Delivering Solution That Drive Our Innovation & Fast
                                Success.</h2>
                        </div>
                        <p class="desc">
                            We are a team of passionate tech experts delivering innovative IT solutions tailored to help
                            businesses grow, adapt, and thrive in a digital. Stay ahead of the competition.
                        </p>
                        <div class="about-funfact">
                            <div class="countup-item">
                                <div class="inline-content">
                                    <span class="counter">3</span>
                                    <span class="count-plus">K<sup>+</sup></span>
                                </div>
                                <span class="count-text">Successful Projects.</span>
                            </div>
                            <div class="countup-item">
                                <div class="inline-content">
                                    <span class="counter">98</span>
                                    <span class="count-plus"><sup>+</sup></span>
                                </div>
                                <span class="count-text">IT Professionals.</span>
                            </div>
                        </div>
                        <a class="tj-primary-btn style-2 mt-25" href="about.html">
                            <span class="btn-text"><span>Learn More</span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                        </a>
                        <div class="circle-text-wrap award-circle"
                            data-bg-image="frontAssets/images/about/award-circle-bg.webp">
                            <span class="circle-text" data-bg-image="frontAssets/images/about/award-circle-text.png"></span>
                            <span class="circle-icon"><span><i class="tji-award"></i></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: About Section -->

    <!-- start: Marquee Section -->
    <section class="h4-marquee-section fix section-gap">
        <div class="container-fluid gx-0">
            <div class="row">
                <div class="col">
                    <div class="marquee-slider-2 rounded-0">
                        <div class="marquee-slider-wrapper">
                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Passion and progress</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Founders and vision</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Growth and impact</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Team and values</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Innovation and future</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Success and impact</h3>
                            </div>
                        </div>
                        <div class="marquee-slider-wrapper">
                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Passion and progress</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Founders and vision</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Growth and impact</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Team and values</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Innovation and future</h3>
                            </div>

                            <div class="marquee-item-3">
                                <span class="marquee-icon">
                                    <i class="tji-marquee"></i>
                                </span>
                                <h3 class="marquee-text">Success and impact</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Marquee Section -->

    <!-- start: Integration Section -->
    <section class="tj-integration-section section-gap-x">
        <div class="integration-section-wrap">
            <div class="bg-img" data-bg-image="./frontAssets/images/bg/common-bg-2.webp"></div>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div
                            class="sec-heading style-3 d-flex flex-wrap align-items-end justify-content-start justify-content-md-between gap-4 mb-0">
                            <div class="sec_heading_wrap d-flex flex-column align-items-start">
                                <span class="sub-title tj-fade-anim" data-delay="0.2" data-duration="0.5">
                                    <i class="tji-subtitle-2"></i>
                                    Our Technologies
                                </span>
                                <h2 class="sec-title tj-split-text-3">Effortless IT Integration for Solutions.</h2>
                            </div>

                            <div class="sec_content_wrap tj-fade-anim" data-delay=".2">
                                <div class="desc">Comprehensive IT for management, including monitoring, maintenance &
                                    support to keep your business running smooth.</div>
                                <a class="tj-text-btn" href="blog-details.html">
                                    <span class="btn-inner">
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                        <span class="btn-text"><span>Read More</span></span>
                                        <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="throwable_wrapper" data-tj-throwable-scene="true">
                            <div class="throwable_items_wrap">
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/gitlab.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/clickup.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/notion.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/asana.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/ovhcloud.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/zoom.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/slack.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/dropbox.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/sendgrid.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/microsoft.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/pipedrive.png" alt="" />
                                    </span>
                                </p>
                                <p data-tj-throwable-el>
                                    <span class="integration_item">
                                        <img src="./frontAssets/images/integration/chatGPT.png" alt="" />
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Integration Section -->

    <!-- start: Testimonial Section -->
    <section class="tj-testimonial-section-2 section-gap overflow-hidden section-separator">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="sec-heading style-2 sec-heading-centered">
                        <span class="sub-title tj-fade-anim"><span>//</span>Success Stories</span>
                        <h2 class="sec-title tj-split-text-5">Building Success with Client <span>Feedback.</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="testimonial-wrapper testimonial-wrapper-2 tj-fade-anim" data-delay="0.5">
                        <div class="testimonial_slider_2 swiper swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial_item_3">
                                        <div class="testimonial_header">
                                            <ul class="author_avatar_wrapper">
                                                <li>
                                                    <i class="tji-quote"></i>
                                                </li>
                                                <li class="author_avatar">
                                                    <img src="frontAssets/images/testimonial/client-1.webp" alt="">
                                                </li>
                                            </ul>
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 90%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial_content">
                                            <div class="desc">
                                                <p>
                                                    Partnering with Nexor has been an absolute game-changer for our company.
                                                    Their team delivered a tailored IT solution that met our unique business
                                                    needs, and their
                                                    proactive approach to problem.
                                                </p>
                                            </div>

                                            <div class="author_info">
                                                <h5 class="name">Devon Lane</h5>
                                                <span class="designation">Co. Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial_item_3">
                                        <div class="testimonial_header">
                                            <ul class="author_avatar_wrapper">
                                                <li>
                                                    <i class="tji-quote"></i>
                                                </li>
                                                <li class="author_avatar">
                                                    <img src="frontAssets/images/testimonial/client-2.webp" alt="">
                                                </li>
                                            </ul>
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 90%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial_content">
                                            <div class="desc">
                                                <p>
                                                    Nexor truly exceeded our expectations. From the initial consultation to
                                                    the final implementation, their team provided excellent service and
                                                    unwavering support. Their
                                                    ability to integrate.
                                                </p>
                                            </div>

                                            <div class="author_info">
                                                <h5 class="name">Cameron Williamson</h5>
                                                <span class="designation">Co. Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial_item_3">
                                        <div class="testimonial_header">
                                            <ul class="author_avatar_wrapper">
                                                <li>
                                                    <i class="tji-quote"></i>
                                                </li>
                                                <li class="author_avatar">
                                                    <img src="frontAssets/images/testimonial/client-3.webp" alt="">
                                                </li>
                                            </ul>
                                            <div class="star-ratings">
                                                <div class="fill-ratings" style="width: 90%">
                                                    <span>★★★★★</span>
                                                </div>
                                                <div class="empty-ratings">
                                                    <span>★★★★★</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="testimonial_content">
                                            <div class="desc">
                                                <p>
                                                    When we approached Nexor for help with our technology integration, we
                                                    were looking for a partner who could not only provide expertise but also
                                                    deliver tangible
                                                    results. They did exactly that.
                                                </p>
                                            </div>

                                            <div class="author_info">
                                                <h5 class="name">Eleanor Pena</h5>
                                                <span class="designation">Co. Founder</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-area"></div>
                        </div>
                        <div class="testimonial-navigation d-none d-md-inline-flex">
                            <div class="slider-prev" role="button">
                                <span class="anim-icon">
                                    <i class="tji-arrow-left-3"></i>
                                    <i class="tji-arrow-left-3"></i>
                                </span>
                            </div>
                            <div class="slider-next" role="button">
                                <span class="anim-icon">
                                    <i class="tji-arrow-right-3"></i>
                                    <i class="tji-arrow-right-3"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Testimonial Section -->

    <!-- start: Team Section -->
    <section class="tj-team-section section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading">
                        <span class="sub-title tj-fade-anim">[ Meet Our Team ]</span>
                        <div class="sec-heading-inner">
                            <h2 class="sec-title tj-split-text-1">Creative Minds Behind our Team</h2>
                            <div class="tj-fade-anim" data-delay="0.1">
                                <p class="desc">Our teams are customized to meet your unique ideas.</p>
                            </div>
                            <div class="tj-fade-anim" data-delay="0.3">
                                <a class="tj-primary-btn d-none d-lg-inline-flex" href="team.html">
                                    <span class="btn-text"><span>More Member</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rg-30">
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item img-reveal-2">
                        <div class="team-img">
                            <img src="frontAssets/images/team/team-1.webp" alt="Image" />
                            <div class="social-links">
                                <span class="share-icon"><i class="tji-share"></i></span>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="tji-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="tji-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank"><i
                                                class="tji-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="title"><a href="team-details.html">Eade Marren</a></h4>
                            <span class="designation">Chief Executive</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item img-reveal-2">
                        <div class="team-img">
                            <img src="frontAssets/images/team/team-2.webp" alt="Image" />
                            <div class="social-links">
                                <span class="share-icon"><i class="tji-share"></i></span>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="tji-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="tji-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank"><i
                                                class="tji-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="title"><a href="team-details.html">Savannah Ngueen</a></h4>
                            <span class="designation">Operations Head</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item img-reveal-2">
                        <div class="team-img">
                            <img src="frontAssets/images/team/team-3.webp" alt="Image" />
                            <div class="social-links">
                                <span class="share-icon"><i class="tji-share"></i></span>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="tji-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="tji-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank"><i
                                                class="tji-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="title"><a href="team-details.html">Cameron William</a></h4>
                            <span class="designation">Marketing Lead</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item img-reveal-2">
                        <div class="team-img">
                            <img src="frontAssets/images/team/team-4.webp" alt="Image" />
                            <div class="social-links">
                                <span class="share-icon"><i class="tji-share"></i></span>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="tji-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="tji-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank"><i
                                                class="tji-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content">
                            <h4 class="title"><a href="team-details.html">Olivia Fox</a></h4>
                            <span class="designation">Business Director</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-lg-none text-center mt-40">
                <a class="tj-primary-btn" href="team.html">
                    <span class="btn-text"><span>More Member</span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!-- end: Team Section -->

    <!-- start: Project Section -->
    <section class="tj-project-section section-gap section-gap-x fix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading">
                        <span class="sub-title tj-fade-anim">[ Recent Projects ]</span>
                        <div class="sec-heading-inner">
                            <h2 class="sec-title tj-split-text-1">Breaking Boundaries, Building Dreams.</h2>
                            <div class="tj-fade-anim" data-delay="0.1">
                                <p class="desc">Our projects are tailored to meet your unique business needs.</p>
                            </div>
                            <div class="slider-navigation d-none d-md-inline-flex tj-fade-anim" data-delay="0.3">
                                <div class="slider-prev">
                                    <span class="anim-icon">
                                        <i class="tji-arrow-left-3"></i>
                                        <i class="tji-arrow-left-3"></i>
                                    </span>
                                </div>
                                <div class="slider-next">
                                    <span class="anim-icon">
                                        <i class="tji-arrow-right-3"></i>
                                        <i class="tji-arrow-right-3"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-12">
                    <div class="project-wrapper tj-fade-anim" data-delay="0.2">
                        <div class="swiper project-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-img img-reveal-2">
                                            <img src="frontAssets/images/project/project-1.webp" alt="" />
                                        </div>
                                        <div class="project-content">
                                            <div class="content-inner">
                                                <span class="categories"><a
                                                        href="project-details.html">Solution</a></span>
                                                <h4 class="title"><a href="project-details.html">Business
                                                        Transformation</a></h4>
                                            </div>
                                            <a class="tj-icon-btn" href="project-details.html">
                                                <i class="tji-arrow-right-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-img img-reveal-2">
                                            <img src="frontAssets/images/project/project-2.webp" alt="" />
                                        </div>
                                        <div class="project-content">
                                            <div class="content-inner">
                                                <span class="categories"><a
                                                        href="project-details.html">Solution</a></span>
                                                <h4 class="title"><a href="project-details.html">Cloud Migration
                                                        Success</a></h4>
                                            </div>
                                            <a class="tj-icon-btn" href="project-details.html">
                                                <i class="tji-arrow-right-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-img img-reveal-2">
                                            <img src="frontAssets/images/project/project-3.webp" alt="" />
                                        </div>
                                        <div class="project-content">
                                            <div class="content-inner">
                                                <span class="categories"><a
                                                        href="project-details.html">Solution</a></span>
                                                <h4 class="title"><a href="project-details.html">Digital Growth
                                                        Strategy</a></h4>
                                            </div>
                                            <a class="tj-icon-btn" href="project-details.html">
                                                <i class="tji-arrow-right-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="project-item">
                                        <div class="project-img img-reveal-2">
                                            <img src="frontAssets/images/project/project-4.webp" alt="" />
                                        </div>
                                        <div class="project-content">
                                            <div class="content-inner">
                                                <span class="categories"><a
                                                        href="project-details.html">Solution</a></span>
                                                <h4 class="title"><a href="project-details.html">Mobile App
                                                        Development</a></h4>
                                            </div>
                                            <a class="tj-icon-btn" href="project-details.html">
                                                <i class="tji-arrow-right-3"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-pagination-area"></div>
                        </div>
                        <div class="d-md-none text-center mt-30">
                            <div class="slider-navigation d-inline-flex">
                                <div class="slider-prev">
                                    <span class="anim-icon">
                                        <i class="tji-arrow-left-3"></i>
                                        <i class="tji-arrow-left-3"></i>
                                    </span>
                                </div>
                                <div class="slider-next">
                                    <span class="anim-icon">
                                        <i class="tji-arrow-right-3"></i>
                                        <i class="tji-arrow-right-3"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Project Section -->

    <!-- start: Working Process Section -->
    <section class="tj-working-process-section section-gap fix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading sec-heading-centered">
                        <span class="sub-title tj-fade-anim">[ Our Working Process ]</span>
                        <h2 class="sec-title tj-split-text-1">Transform Your Business in 3 Simple Steps.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="process-area">
            <div class="process-border tj-fade-anim" data-delay="1" data-direction="left"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="process-wrap tj-slide-wrap">
                            <div class="process-item tj-slide-left">
                                <span class="process-step">01.</span>
                                <div class="process-content">
                                    <h4 class="title">Deep Discovery & Planning</h4>
                                    <p class="desc">Every great solution starts understanding. We take the time to learn
                                        about your business, challenges, and goals.</p>
                                </div>
                            </div>
                            <div class="process-item tj-slide-left">
                                <span class="process-step">02.</span>
                                <div class="process-content">
                                    <h4 class="title">Development & Implement</h4>
                                    <p class="desc">Every great solution starts understanding. We take the time to learn
                                        about your business, challenges, and goals.</p>
                                </div>
                            </div>
                            <div class="process-item tj-slide-left">
                                <span class="process-step">03.</span>
                                <div class="process-content">
                                    <h4 class="title">Optimization & Support</h4>
                                    <p class="desc">Every great solution starts understanding. We take the time to learn
                                        about your business, challenges, and goals.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Working Process Section -->

    <!-- start: Contact Section -->
    <section class="tj-contact-section fix section-gap section-gap-x">
        <div class="bg-img" data-bg-image="frontAssets/images/bg/common-bg-2.webp"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="contact-left">
                        <div class="sec-heading">
                            <span class="sub-title tj-fade-anim">[ Get In Touch ]</span>
                            <h2 class="sec-title tj-split-text-1">Have any Questions on Mind? Get in Touch for Market
                                Experts.</h2>
                            <div class="tj-fade-anim" data-delay="0.3">
                                <a class="tj-primary-btn mt-25 d-none d-lg-inline-flex" href="contact.html">
                                    <span class="btn-text"><span>Contact Us Now</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="contact-info tj-fade-anim" data-delay="0.3" data-direction="bottom">
                            <div class="contact-item">
                                <h6 class="title">Contact Info:</h6>
                                <a class="contact-link" href="tel:10095447818">+1 (009) 544-7818</a>
                                <a class="contact-link" href="mailto:support@tekmino.com">support@tekmino.com</a>
                            </div>
                            <div class="contact-item">
                                <h6 class="title">Find Us:</h6>
                                <span class="contact-link">Renner Burg, West Rond, MT 9421-030, USA.</span>
                            </div>
                            <div class="contact-item">
                                <h6 class="title">Opening Hour:</h6>
                                <span class="contact-link">Mon - Fri <span>(Open)</span></span>
                                <span class="contact-link">09:00am - 06.00pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="contact-form style-2 tj-fade-anim" data-delay="0.3" data-direction="right">
                        <h3 class="title">Drop Us a <span>Line.</span></h3>
                        <form id="contact-form-2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <label class="cf-label">Full Name <span>*</span></label>
                                        <input type="text" name="cfName2" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <label class="cf-label">Email Address <span>*</span></label>
                                        <input type="email" name="cfEmail2" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <label class="cf-label">Phone number <span>*</span></label>
                                        <input type="tel" name="cfPhone2" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <label class="cf-label">Select Service <span>*</span></label>
                                        <div class="tj-nice-select-box">
                                            <div class="tj-select">
                                                <select name="cfSubject2">
                                                    <option value="1">Managed IT Services</option>
                                                    <option value="2">Cloud Computing</option>
                                                    <option value="3">Cybersecurity Solutions</option>
                                                    <option value="4">IT Consulting & Strategy</option>
                                                    <option value="5">Software Development</option>
                                                    <option value="6">Network Infrastructure</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-input message-input">
                                        <label class="cf-label">Type message</label>
                                        <textarea name="cfMessage2" id="message"></textarea>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button class="tj-primary-btn" type="submit">
                                        <span class="btn-text"><span>Send Message</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-3"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Contact Section -->

    <!-- start: Blog Section -->
    <section class="tj-blog-section section-gap fix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading sec-heading-centered">
                        <span class="sub-title tj-fade-anim">[ Insights & Innovation ]</span>
                        <h2 class="sec-title tj-split-text-1">Explore Latest Insights, & Innovations.</h2>
                    </div>
                </div>
            </div>
            <div class="row rg-30">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item tj-fade-anim" data-delay="0.1">
                        <div class="blog-thumb img-reveal-2">
                            <a href="blog-details.html"><img src="frontAssets/images/blog/blog-1.webp" alt="" /></a>
                            <div class="blog-date">
                                <span class="date">28</span>
                                <span class="month">Feb</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="categories"><a href="blog-details.html">Solutions</a></span>
                                <span>By <a href="blog-details.html">Ellinien Loma</a></span>
                            </div>
                            <h4 class="title"><a href="blog-details.html">How to Successfully Migrate Your Business to
                                    the Cloud</a></h4>
                            <a class="tj-text-btn" href="blog-details.html">
                                <span class="btn-inner">
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    <span class="btn-text"><span>Read More</span></span>
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item tj-fade-anim" data-delay="0.2">
                        <div class="blog-thumb img-reveal-2">
                            <a href="blog-details.html"><img src="frontAssets/images/blog/blog-2.webp" alt="" /></a>
                            <div class="blog-date">
                                <span class="date">28</span>
                                <span class="month">Feb</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="categories"><a href="blog-details.html">Focus</a></span>
                                <span>By <a href="blog-details.html">Ellinien Loma</a></span>
                            </div>
                            <h4 class="title"><a href="blog-details.html">Building a Stronger Workforce with IT
                                    Training</a></h4>
                            <a class="tj-text-btn" href="blog-details.html">
                                <span class="btn-inner">
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    <span class="btn-text"><span>Read More</span></span>
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item tj-fade-anim" data-delay="0.3">
                        <div class="blog-thumb img-reveal-2">
                            <a href="blog-details.html"><img src="frontAssets/images/blog/blog-3.webp" alt="" /></a>
                            <div class="blog-date">
                                <span class="date">28</span>
                                <span class="month">Feb</span>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <span class="categories"><a href="blog-details.html">Software</a></span>
                                <span>By <a href="blog-details.html">Ellinien Loma</a></span>
                            </div>
                            <h4 class="title"><a href="blog-details.html">Optimizing Your IT Budget: Tips and
                                    Strategies</a></h4>
                            <a class="tj-text-btn" href="blog-details.html">
                                <span class="btn-inner">
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                    <span class="btn-text"><span>Read More</span></span>
                                    <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Blog Section -->

    <!-- start: Cta Section -->
    <section class="tj-cta-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-area tj-fade-anim">
                        <div class="cta-content">
                            <h2 class="title">Don’t Miss Out the Future!</h2>
                        </div>
                        <div class="cta-right">
                            <div class="subscribe-form cta-form">
                                <form action="#">
                                    <input type="email" name="email" placeholder="Enter email here..." />
                                    <button class="tj-primary-btn style-2" type="submit">
                                        <span class="btn-text"><span>Subscribe Now</span></span>
                                        <span class="btn-icon"><i class="tji-bell"></i></span>
                                    </button>
                                </form>
                            </div>
                            <div class="social-links cta-social">
                                <span class="title">Follow us:</span>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank"><i
                                                class="tji-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank"><i
                                                class="tji-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.x.com/" target="_blank"><i class="tji-x-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.linkedin.com/" target="_blank"><i
                                                class="tji-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Cta Section -->
@endsection

@section('script')

@endsection
