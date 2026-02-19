@extends('frontend.layouts.master')

@section('title', $page->title)
@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)
@section('meta_keywords', $page->meta_keywords)
@section('author', $page->author)

@section('css')
<link rel="stylesheet" href="{{ asset('frontAssets/css/leaflet.css') }}" />
<style>
    .contact-list .social-icons {
        color: #ffffff !important;
        background-color: #f62648;
        padding: 8px;
        margin-right: 10px;
        border-radius: 50px;
        transition: color 0.3s ease;
    }
    .contact-list .social-icons:hover {
        color: #f62648 !important;
        background-color: #ffffff;
    }
    .contact-item.style-2 {
        height: 280px;
    }
</style>
@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <!-- start: Contact Top Section -->
    <div class="tj-contact-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-heading text-center">
                        <span class="sub-title tj-fade-anim">[ Contact info ]</span>
                        <h2 class="sec-title tj-split-text-1">Reach Out Us Now!</h2>
                    </div>
                </div>
            </div>
            <div class="row row-gap-4">
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.1">
                        <div class="contact-icon">
                            <i class="tji-location"></i>
                        </div>
                        <h3 class="contact-title">Our Location</h3>
                        <p>{{ \App\Helpers\Helper::getCompanyAddress() }}</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.3">
                        <div class="contact-icon">
                            <i class="tji-envelop"></i>
                        </div>
                        <h3 class="contact-title">Email us</h3>
                        <ul class="contact-list">
                            <li><a
                                    href="mailto:{{ \App\Helpers\Helper::getCompanyEmail() }}">{{ \App\Helpers\Helper::getCompanyEmail() }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.5">
                        <div class="contact-icon">
                            <i class="tji-phone"></i>
                        </div>
                        <h3 class="contact-title">Call us</h3>
                        <ul class="contact-list">
                            @php
                                $phone = \App\Helpers\Helper::getCompanyPhone();
                                // remove +, spaces, dashes, brackets
                                $waPhone = preg_replace('/[^0-9]/', '', $phone);
                            @endphp
                            <li><a href="https://wa.me/{{ $waPhone }}">{{ $phone }}</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-6">
                    <div class="contact-item style-2 tj-fade-anim" data-delay="0.7">
                        <div class="contact-icon">
                            <i class="tji-chat"></i>
                        </div>
                        <h3 class="contact-title">Social Connect</h3>
                        <ul class="contact-list d-flex justify-content-center align-items-center">
                            <li>
                                <a class="social-icons" href="{{ \App\Helpers\Helper::getCompanyFacebook() }}" target="_blank">
                                    <i class="tji-facebook"></i>
                                </a>
                            </li>

                            <li>
                                <a class="social-icons" href="{{ \App\Helpers\Helper::getCompanyLinkedin() }}" target="_blank">
                                    <i class="tji-linkedin"></i>
                                </a>
                            </li>

                            <li>
                                <a class="social-icons" href="{{ \App\Helpers\Helper::getCompanyInstagram() }}" target="_blank">
                                    <i class="tji-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a class="social-icons" href="{{ \App\Helpers\Helper::getCompanyTwitter() }}" target="_blank">
                                    <i class="tji-x-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a class="social-icons" href="{{ \App\Helpers\Helper::getCompanyTiktok() }}" target="_blank">
                                    <i class="tji-tiktok"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end: Contact Top Section -->

    <!-- start: Contact Section -->
    <section class="tj-contact-section-2 section-gap-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-form contact-form-3 tj-fade-anim">
                        <h3 class="title">Feel Free Contact with Us!</h3>
                        <form id="contact-form" action="{{ route('frontend.contact.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="text" name="name" placeholder="Name*" value="{{ old('name') }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <input type="tel" name="phone" placeholder="Phone*" value="{{ old('phone') }}" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-input">
                                        <div class="tj-nice-select-box">
                                            <div class="tj-select">
                                                <select name="service_id" id="service_id">
                                                    @forelse ($services as $service)
                                                        <option value="{{ $service->id }}" {{ old('service_id') == $service->id ? 'selected' : '' }}>{{ $service->title }}</option>
                                                    @empty
                                                        <option value="0">Select Subject</option>
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-input message-input">
                                        <textarea name="message" id="message" placeholder="Message*">{{ old('message') }}</textarea>
                                    </div>
                                </div>
                                <div class="submit-btn">
                                    <button class="tj-primary-btn" type="submit">
                                        <span class="btn-text"><span>Submit Now</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="map-area tj-fade-anim" data-delay="0.5">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Contact Section -->

    @include('frontend.pages.sections.cta')
@endsection

@section('script')
<script src="{{ asset('frontAssets/js/leaflet.js') }}"></script>
@endsection
