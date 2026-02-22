<!-- start: Contact Section -->
    <section class="tj-contact-section fix section-gap section-gap-x">
        <div class="bg-img" data-bg-image="{{ asset('frontAssets/images/bg/common-bg-2.webp') }}"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-5">
                    <div class="contact-left">
                        <div class="sec-heading">
                            <span class="sub-title tj-fade-anim">[ Get In Touch ]</span>
                            <h2 class="sec-title tj-split-text-1">Have any Questions on Mind? Get in Touch for Market
                                Experts.</h2>
                            <div class="tj-fade-anim" data-delay="0.3">
                                <a class="tj-primary-btn mt-25 d-none d-lg-inline-flex" href="{{ route('frontend.contact') }}">
                                    <span class="btn-text"><span>Contact Us Now</span></span>
                                    <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                </a>
                            </div>
                        </div>
                        <div class="contact-info tj-fade-anim" data-delay="0.3" data-direction="bottom">
                            <div class="contact-item">
                                <h6 class="title">Contact Info:</h6>
                                @php
                                    $phone = \App\Helpers\Helper::getCompanyPhone();
                                    // remove +, spaces, dashes, brackets
                                    $waPhone = preg_replace('/[^0-9]/', '', $phone);
                                @endphp
                                <a class="contact-link" href="https://wa.me/{{ $waPhone }}">{{ $phone }}</a>
                                <a class="contact-link" href="mailto:{{ \App\Helpers\Helper::getCompanyEmail() }}">{{ \App\Helpers\Helper::getCompanyEmail() }}</a>
                            </div>
                            <div class="contact-item">
                                <h6 class="title">Find Us:</h6>
                                <span class="contact-link">{{ \App\Helpers\Helper::getCompanyAddress() }}</span>
                            </div>
                            <div class="contact-item">
                                <h6 class="title">Opening Hour:</h6>
                                <span class="contact-link">Mon - Sat <span>(Open)</span></span>
                                <span class="contact-link">09:00am - 09.00pm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="contact-form style-2 tj-fade-anim" data-delay="0.3" data-direction="right">
                        <h3 class="title">Drop Us a <span>Line.</span></h3>
                        <form id="contact-form-2" action="{{ route('frontend.contact.submit') }}" method="POST">
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
                                                    @forelse ($allServices as $service)
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
            </div>
        </div>
    </section>
    <!-- end: Contact Section -->
