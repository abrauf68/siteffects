@extends('frontend.layouts.master')

@section('title', 'About Us')

@section('css')

@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <!-- start: Choose Section -->
    <section class="tj-choose-section fix section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading">
                        <span class="sub-title tj-fade-anim">[ Why Chose Us ]</span>
                        <div class="sec-heading-inner">
                            <h2 class="sec-title tj-split-text-1">Reliable IT Solution, for Best Results.</h2>
                            <div class="tj-fade-anim">
                                <p class="desc">Our services are customized to meet your unique.</p>
                            </div>
                            <div class="tj-fade-anim" data-delay="0.5">
                                <a class="tj-primary-btn d-none d-lg-inline-flex" href="{{ route('frontend.services') }}">
                                    <span class="btn-text"><span>Learn More</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row rg-30">
                <div class="col-xl-3 col-md-6">
                    <div class="choose-box tj-fade-anim" data-delay=".3" data-duration="1" data-direction="top">
                        <div class="choose-inner">
                            <div class="choose-icon">
                                <i class="tji-thumbs-up"></i>
                            </div>
                            <div class="choose-content">
                                <h4 class="title">Proven Track Record</h4>
                                <p class="desc">With a portfolio of successful projects and satisfied clients, we have a
                                    reputation.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose-box tj-fade-anim" data-delay=".3" data-duration="1" data-direction="bottom">
                        <div class="choose-inner">
                            <div class="choose-icon">
                                <i class="tji-idea"></i>
                            </div>
                            <div class="choose-content">
                                <h4 class="title">Tailored Solutions</h4>
                                <p class="desc">Our services are customized to meet your unique business needs, ensuring.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose-box tj-fade-anim" data-delay=".3" data-duration="1" data-direction="top">
                        <div class="choose-inner">
                            <div class="choose-icon">
                                <i class="tji-rocket"></i>
                            </div>
                            <div class="choose-content">
                                <h4 class="title">Future Technologies</h4>
                                <p class="desc">Stay ahead of the competition with AI, cloud computing, and automation
                                    solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="choose-box tj-fade-anim" data-delay=".3" data-duration="1" data-direction="bottom">
                        <div class="choose-inner">
                            <div class="choose-icon">
                                <i class="tji-hand-2"></i>
                            </div>
                            <div class="choose-content">
                                <h4 class="title">24/7 Support</h4>
                                <p class="desc">Stay ahead of the competition with AI, cloud computing, and automation
                                    solutions.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-lg-none text-center mt-40">
                <a class="tj-primary-btn" href="{{ route('frontend.services') }}">
                    <span class="btn-text"><span>Learn More</span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!-- end: Choose Section -->

    <!-- start: About Section -->
    @include('frontend.pages.sections.about')
    <!-- end: About Section -->

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
                                <a class="tj-primary-btn d-none d-lg-inline-flex" href="#">
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
                            <img src="{{ asset('frontAssets/images/team/team-1.webp') }}" alt="Image">
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
                            <h4 class="title"><a href="#">Eade Marren</a></h4>
                            <span class="designation">Chief Executive</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item img-reveal-2">
                        <div class="team-img">
                            <img src="{{ asset('frontAssets/images/team/team-2.webp') }}" alt="Image">
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
                            <h4 class="title"><a href="#">Savannah Ngueen</a></h4>
                            <span class="designation">Operations Head</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item img-reveal-2">
                        <div class="team-img">
                            <img src="{{ asset('frontAssets/images/team/team-3.webp') }}" alt="Image">
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
                            <h4 class="title"><a href="#">Cameron William</a></h4>
                            <span class="designation">Marketing Lead</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="team-item img-reveal-2">
                        <div class="team-img">
                            <img src="{{ asset('frontAssets/images/team/team-4.webp') }}" alt="Image">
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
                            <h4 class="title"><a href="#">Olivia Fox</a></h4>
                            <span class="designation">Business Director</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-lg-none text-center mt-40">
                <a class="tj-primary-btn" href="#">
                    <span class="btn-text"><span>More Member</span></span>
                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                </a>
            </div>
        </div>
    </section>
    <!-- end: Team Section -->

    <!-- start: FAQ Section -->
    @include('frontend.pages.sections.faqs')
    <!-- end: FAQ Section -->

    <!-- start: Client Section -->
    @include('frontend.pages.sections.clients')
    <!-- end: Client Section -->

    @include('frontend.pages.sections.cta')
@endsection

@section('script')

@endsection
