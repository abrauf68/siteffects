@extends('frontend.layouts.master')

@section('title', $page->title)
@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('author', $page->author)

@section('css')
    <style>
        /* CARD IMAGE WRAPPER */
        .project-img {
            position: relative;
            height: 300px;
            overflow: hidden;
            border-radius: 12px;

            /* SCROLL IMAGE */
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat;

            transition: background-position 6s linear;
        }

        /* MAIN IMAGE OVERLAY */
        .project-img::before {
            content: "";
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: opacity 0.3s ease;
        }

        /* HOVER EFFECT */
        .project-item:hover .project-img {
            background-position: bottom center;
        }

        .project-item:hover .project-img::before {
            opacity: 0;
        }
    </style>
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
                            <a class="tj-primary-btn" href="{{ route('frontend.services') }}">
                                <span class="btn-text"><span>Explore Services</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                            </a>
                            @php
                                $phone = \App\Helpers\Helper::getCompanyPhone();
                                $waPhone = preg_replace('/[^0-9]/', '', $phone);
                            @endphp
                            <a class="number" href="https://wa.me/{{ $waPhone }}"><i
                                    class="tji-phone-2"></i><span>{{ $phone }}</span></a>
                        </div>
                        <div class="list-area tj-fade-anim" data-delay=".6" data-duration="1" data-direction="left">
                            <ul class="list-style-1">
                                <li>
                                    <span><i class="tji-check"></i></span>Smart Solutions
                                </li>
                                <li>
                                    <span><i class="tji-check"></i></span>Real Results
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
                            <span class="text">Trusted by 100+ Tech Companies.</span>
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
        {{-- <div class="banner-scroll tj-fade-anim" data-delay="1.2" data-direction="top">
            <a href="#client" class="scroll-down">
                <span class="text">Scroll Down</span>
                <span class="icon"><i class="tji-arrow-down-2"></i></span>
            </a>
        </div> --}}
    </section>
    <!-- end: Banner Section -->

    <!-- start: Client Section -->
    @include('frontend.pages.sections.clients')
    <!-- end: Client Section -->

    <!-- start: Service Section -->
    <div class="tj-service-section section-gap">
        <div class="container">
            <div class="row rg-30">

                <!-- Left Heading Column -->
                <div class="col-lg-4 col-md-6">
                    <div class="sec-heading mt-30 mb-0 tj-fade-anim" data-delay=".1" data-direction="bottom">
                        <span class="sub-title tj-fade-anim">[ Explore Services ]</span>
                        <h2 class="sec-title tj-split-text-1">
                            Reliable IT Solution for a Smarter.
                        </h2>
                        <a class="tj-primary-btn mt-20 d-md-inline-flex d-none" href="{{ route('frontend.services') }}">
                            <span class="btn-text"><span>Learn More</span></span>
                            <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                        </a>
                    </div>
                </div>

                @foreach ($services as $index => $service)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item tj-fade-anim" data-delay="{{ 0.3 + $index * 0.2 }}"
                            data-direction="bottom">

                            <div class="service-inner">

                                <!-- Dynamic Icon -->
                                <div class="service-icon">
                                    <i class="{{ $service->icon }}"></i>
                                </div>

                                <!-- Dynamic Title & Short Description -->
                                <div class="service-content">
                                    <h4 class="title">
                                        <a href="{{ route('frontend.services', $service->slug) }}">
                                            {{ $service->title }}
                                        </a>
                                    </h4>

                                    <p class="desc">
                                        {{ Str::limit(strip_tags($service->description), 120) }}
                                    </p>
                                </div>

                                <!-- Dynamic Features -->
                                @if ($service->features)
                                    <div class="service-list">
                                        <ul class="list-style-2">
                                            @foreach (json_decode($service->features) as $feature)
                                                <li>
                                                    <i class="tji-check-2"></i> {{ $feature }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                            </div>

                            <!-- Auto Numbering -->
                            <span class="item-count">
                                {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.
                            </span>

                            <!-- Button -->
                            <div class="service-btn">
                                <a class="tj-text-btn" href="{{ route('frontend.services', $service->slug) }}">
                                    <span class="btn-inner">
                                        <span class="btn-icon">
                                            <span><i class="tji-arrow-right-4"></i></span>
                                        </span>
                                        <span class="btn-text">
                                            <span>Learn More</span>
                                        </span>
                                        <span class="btn-icon">
                                            <span><i class="tji-arrow-right-4"></i></span>
                                        </span>
                                    </span>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Mobile Button -->
            <div class="d-md-none text-center mt-40">
                <a class="tj-primary-btn" href="{{ route('frontend.services') }}">
                    <span class="btn-text"><span>Learn More</span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                </a>
            </div>
        </div>
    </div>
    <!-- end: Service Section -->


    <!-- start: About Section -->
    @include('frontend.pages.sections.about')
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
    {{-- @include('frontend.pages.sections.technologies') --}}
    <!-- end: Integration Section -->

    <!-- start: Testimonial Section -->
    {{-- @include('frontend.pages.sections.testimonials') --}}
    <!-- end: Testimonial Section -->

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
                                @foreach ($projects as $project)
                                    <div class="swiper-slide">
                                        <div class="project-item">

                                            {{-- IMAGE --}}
                                            <div class="project-img"
                                                style="background-image: url('{{ asset($project->scroll_image) }}');">
                                                <style>
                                                    .project-img::before {
                                                        background-image: url('{{ asset($project->main_image ?? 'frontAssets/images/project/project-2.webp') }}');
                                                    }
                                                </style>
                                            </div>

                                            {{-- CONTENT --}}
                                            <div class="project-content">
                                                <div class="content-inner">
                                                    <span class="categories">
                                                        <a
                                                            href="{{ route('frontend.projects', ['category' => $project->category]) }}">
                                                            {{ ucwords($project->category) }}
                                                        </a>
                                                    </span>

                                                    <h4 class="title">
                                                        <a
                                                            href="{{ route('frontend.projects', [
                                                                'category' => $project->category,
                                                                'project' => $project->slug,
                                                            ]) }}">
                                                            {{ $project->title }}
                                                        </a>
                                                    </h4>
                                                </div>

                                                <a class="tj-icon-btn"
                                                    href="{{ route('frontend.projects', [
                                                        'category' => $project->category,
                                                        'project' => $project->slug,
                                                    ]) }}">
                                                    <i class="tji-arrow-right-3"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </div>
                                @endforeach
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
                                    <h4 class="title">Deep Discovery & Strategy</h4>
                                    <p class="desc">
                                        We analyze your business goals, target audience, and technical requirements to
                                        create a clear roadmap for successful web and software development.
                                    </p>
                                </div>
                            </div>

                            <div class="process-item tj-slide-left">
                                <span class="process-step">02.</span>
                                <div class="process-content">
                                    <h4 class="title">Design & Development</h4>
                                    <p class="desc">
                                        Our team builds high-performance websites, custom software, and scalable digital
                                        solutions using modern technologies to ensure speed, security, and reliability.
                                    </p>
                                </div>
                            </div>

                            <div class="process-item tj-slide-left">
                                <span class="process-step">03.</span>
                                <div class="process-content">
                                    <h4 class="title">Testing, Launch & Ongoing Support</h4>
                                    <p class="desc">
                                        We thoroughly test, deploy, and continuously optimize your solution, providing
                                        long-term maintenance and support to keep your business growing.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Working Process Section -->

    @include('frontend.pages.sections.contact')

    <!-- start: Blog Section -->
    {{-- <section class="tj-blog-section section-gap fix">
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
                            <a href="blog-details.html"><img src="frontAssets/images/blog/blog-1.webp"
                                    alt="" /></a>
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
                            <a href="blog-details.html"><img src="frontAssets/images/blog/blog-2.webp"
                                    alt="" /></a>
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
                            <a href="blog-details.html"><img src="frontAssets/images/blog/blog-3.webp"
                                    alt="" /></a>
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
    </section> --}}
    <!-- end: Blog Section -->

    @include('frontend.pages.sections.cta')
@endsection

@section('script')

@endsection
