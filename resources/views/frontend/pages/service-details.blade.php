@extends('frontend.layouts.master')

@section('title', $service->title)
@section('meta_title', $service->meta_title)
@section('meta_description', $service->meta_description)
@section('meta_keywords', $service->meta_keywords)
@section('author', 'Siteffect Solutions')

@section('css')

@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <!-- start: Service Details Section -->
    <section class="tj-blog-section section-gap">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-8">
                    <div class="post-details-wrapper">
                        <div class="blog-images">
                            <img src="{{ asset($service->image ?? 'frontAssets/images/services/service-details.webp') }}" alt="Images" />
                        </div>
                        <h2 class="title">{{ $service->meta_title }}</h2>
                        <div class="blog-text">
                            {!! $service->description !!}
                            @if(!empty($service->features))
                                <ul class="tj_list">
                                    @foreach(json_decode($service->features) as $feature)
                                        <li><i class="tji-check-4"></i>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            @if (isset($serviceFaqs) && count($serviceFaqs) > 0)
                                <h3>Frequently asked questions</h3>
                                <div class="tj_accordion tj_accordion_2 tj_accordion_4" id="tjAccordion01">
                                    @foreach ($serviceFaqs as $index => $faq)
                                        <div class="accordion_item {{ $index == 0 ? 'active' : '' }}">
                                            <button class="accordion_title {{ $index == 0 ? 'show' : 'collapsed' }}" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#accordion-{{ $index }}" aria-expanded="true">
                                                {{ $faq->question }}
                                            </button>
                                            <div id="accordion-{{ $index }}" class="collapse {{ $index == 0 ? 'show' : '' }}" data-bs-parent="#tjAccordion01">
                                                <div class="accordion-body accordion_content">
                                                    {{ $faq->answer }}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                        <div class="tj-post__navigation mb-0">
                            <!-- previous post -->
                            <div class="tj-nav__post previous">
                                <div class="tj-nav-post__nav prev_post">
                                    <a href="{{ route('frontend.services', $previousService->slug) }}"><span><i
                                                class="tji-arrow-left-5"></i></span>Previous</a>
                                </div>
                            </div>
                            <div class="tj-nav-post__grid">
                                <a href="{{ route('frontend.services') }}"><i class="tji-window"></i></a>
                            </div>
                            <!-- next post -->
                            <div class="tj-nav__post next">
                                <div class="tj-nav-post__nav next_post">
                                    <a href="{{ route('frontend.services', $nextService->slug) }}">Next<span><i class="tji-arrow-right-5"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-sidebar-widget service-categories">
                            <h4 class="widget-title">More services</h4>
                            <ul>
                                @foreach ($services as $serv)
                                    <li>
                                        <a class="{{ $service->slug == $serv->slug ? 'active' : '' }}" href="{{ route('frontend.services', $serv->slug) }}">
                                            {{ $serv->title }}
                                            <span class="icon"><i class="tji-arrow-right-5"></i></span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="tj-sidebar-widget widget-feature-item">
                            <div class="feature-box">
                                <div class="feature-content">
                                    <h2 class="title">Innovative</h2>
                                    <span>IT Solutions.</span>
                                    @php
                                        $phone = \App\Helpers\Helper::getCompanyPhone();
                                        // remove +, spaces, dashes, brackets
                                        $waPhone = preg_replace('/[^0-9]/', '', $phone);
                                    @endphp

                                    <a class="read-more feature-contact" href="https://wa.me/{{ $waPhone }}" target="_blank">
                                        <i class="tji-phone-3"></i>
                                        <span>{{ $phone }}</span>
                                    </a>
                                </div>
                                <div class="feature-images">
                                    <img src="{{ asset('frontAssets/images/services/service-ad.webp') }}" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Service Details Section -->

    @include('frontend.pages.sections.cta')
@endsection

@section('script')

@endsection
