@extends('frontend.layouts.master')

@section('title', 'Error 429')

@section('css')

@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <!-- start: Error Section -->
    <section class="tj-error-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="tj-error-wrap text-center">
                        <div class="tj-error-content">
                            <h2 class="error-title tj-split-text-1">Oooop! Too Many Requests</h2>
                            <div class="error-desc">
                                {{ __("You've sent too many requests in a given amount of time. Please try again later.") }}
                            </div>
                            <a class="tj-primary-btn error-btn" href="{{ route('frontend.home') }}">
                                <span class="btn-text"><span>Go Back to Home</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Error Section -->

    @include('frontend.pages.sections.cta')
@endsection

@section('script')

@endsection


