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
