@extends('frontend.layouts.master')

@section('title', $project->title)

@section('css')

@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <!-- start: Project Details Section -->
    <section class="tj-blog-section section-gap">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-8">
                    <div class="post-details-wrapper">
                        <div class="blog-images">
                            <img src="{{ asset($project->main_image ?? 'frontAssets/images/project/project-details.webp') }}"
                                alt="Images" />
                        </div>
                        <h2 class="title">{{ $project->meta_title }}</h2>
                        <div class="blog-text">
                            {!! $project->description !!}
                            @if (!empty($project->features))
                                <ul class="tj_list">
                                    @foreach (json_decode($project->features) as $feature)
                                        <li><i class="tji-check-4"></i>{{ $feature }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </div>
                        <div class="tj-post__navigation mb-0">
                            <!-- previous post -->
                            <div class="tj-nav__post previous">
                                <div class="tj-nav-post__nav prev_post">
                                    <a
                                        href="{{ route('frontend.projects', [
                                            'category' => $previousProject->category,
                                            'project' => $previousProject->slug,
                                        ]) }}"><span><i
                                                class="tji-arrow-left-5"></i></span>Previous</a>
                                </div>
                            </div>
                            <div class="tj-nav-post__grid">
                                <a href="{{ route('frontend.projects') }}"><i class="tji-window"></i></a>
                            </div>
                            <!-- next post -->
                            <div class="tj-nav__post next">
                                <div class="tj-nav-post__nav next_post">
                                    <a
                                        href="{{ route('frontend.projects', [
                                            'category' => $nextProject->category,
                                            'project' => $nextProject->slug,
                                        ]) }}">Next<span><i
                                                class="tji-arrow-right-5"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="tj-main-sidebar">
                        <div class="tj-sidebar-widget widget-categories">
                            <h4 class="widget-title">Project Info</h4>
                            <div class="infos-wrapper">
                                <div class="infos-item">
                                    <div class="project-icons">
                                        <i class="tji-user"></i>
                                    </div>
                                    <div class="project-text">
                                        <span>Client</span>
                                        <h6 class="title">{{ $project->client }}</h6>
                                    </div>
                                </div>
                                <div class="infos-item">
                                    <div class="project-icons">
                                        <i class="tji-budget"></i>
                                    </div>
                                    <div class="project-text">
                                        <span>Technologies</span>
                                        <h6 class="title">{{ $project->technologies }}</h6>
                                    </div>
                                </div>
                                <div class="infos-item">
                                    <div class="project-icons">
                                        <i class="tji-chart"></i>
                                    </div>
                                    <div class="project-text">
                                        <span>Sector</span>
                                        <h6 class="title">{{ ucwords($project->category) }}</h6>
                                    </div>
                                </div>
                                @if ($project->completion_date != null)
                                    <div class="infos-item">
                                        <div class="project-icons">
                                            <i class="tji-calendar"></i>
                                        </div>
                                        <div class="project-text">
                                            <span>Complete date</span>
                                            <h6 class="title">
                                                {{ \Carbon\Carbon::parse($project->completion_date)->format('M d, Y') }}
                                            </h6>
                                        </div>
                                    </div>
                                @endif
                                @if ($project->live_url != null)
                                    <div class="infos-item">
                                        <div class="project-icons">
                                            <i class="tji-calendar"></i>
                                        </div>
                                        <div class="project-text">
                                            <span>Live Visit Link</span>
                                            <h6 class="title"><a href="{{ $project->live_url }}" target="_blank">Visit
                                                    Now</a></h6>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="tj-socials-wrapper">
                                <h6 class="title">Share:</h6>
                                <ul class="tj-socials">

                                    {{-- Facebook --}}
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                            target="_blank">
                                            <i class="tji-facebook"></i>
                                        </a>
                                    </li>

                                    {{-- Instagram (copy link) --}}
                                    <li>
                                        <a href="#"
                                            onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}'); alert('Project link copied for Instagram!'); return false;">
                                            <i class="tji-instagram"></i>
                                        </a>
                                    </li>

                                    {{-- X (Twitter) --}}
                                    <li>
                                        <a href="https://x.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($project->title) }}"
                                            target="_blank">
                                            <i class="tji-x-twitter"></i>
                                        </a>
                                    </li>

                                    {{-- LinkedIn --}}
                                    <li>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($project->title) }}"
                                            target="_blank">
                                            <i class="tji-linkedin"></i>
                                        </a>
                                    </li>

                                    {{-- TikTok --}}
                                    <li>
                                        <a href="#"
                                            onclick="navigator.clipboard.writeText('{{ request()->fullUrl() }}'); alert('Project link copied! You can now share it on TikTok.'); return false;">
                                            <i class="tji-tiktok"></i>
                                        </a>
                                    </li>

                                </ul>
                            </div>

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

                                    <a class="read-more feature-contact" href="https://wa.me/{{ $waPhone }}"
                                        target="_blank">
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
    <!-- end: Project Details Section -->

    @include('frontend.pages.sections.cta')
@endsection

@section('script')

@endsection
