<section id="client" class="tj-client-section section-gap section-separator">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="client-content">
                        <h5 class="sec-title">Join Over <span>1000+</span> Companies with Siteffects</h5>
                    </div>
                    <div class="swiper client-slider">
                        <div class="swiper-wrapper">
                            @foreach ($brands as $brand)
                                <div class="swiper-slide client-item">
                                    <div class="client-logo">
                                        <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }}">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>