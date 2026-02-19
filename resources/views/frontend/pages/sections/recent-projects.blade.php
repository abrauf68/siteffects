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
