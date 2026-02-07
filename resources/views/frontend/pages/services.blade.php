@extends('frontend.layouts.master')

@section('title', 'Services')

@section('css')

@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <!-- start: Service Section -->
    <section class="tj-service-section section-gap">
        <div class="container">
            <div class="row rg-30">
                @foreach ($services as $index => $service)
                    <div class="col-xl-4 col-md-6">
                        <div class="service-item service-item-2">
                            <div class="service-inner">
                                <div class="service-icon">
                                    <i class="{{ $service->icon ?? 'tji-computer' }}"></i>
                                </div>
                                <div class="service-content">
                                    <h4 class="title">
                                        <a href="{{ route('frontend.services', $service->slug) }}">
                                            {{ $service->title }}
                                        </a>
                                    </h4>
                                    <p class="desc">{!! Str::limit(strip_tags($service->description), 100) !!}</p>
                                    <a class="tj-text-btn" href="{{ route('frontend.services', $service->slug) }}">
                                        <span class="btn-inner">
                                            <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                            <span class="btn-text"><span>Learn More</span></span>
                                            <span class="btn-icon"><span><i class="tji-arrow-right-4"></i></span></span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                            <span class="item-count">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}.</span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end: Service Section -->

    @include('frontend.pages.sections.contact')

    @include('frontend.pages.sections.cta')
@endsection

@section('script')

@endsection
