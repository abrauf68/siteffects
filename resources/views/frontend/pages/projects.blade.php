@extends('frontend.layouts.master')

@section('title', 'Projects')

@section('css')
    <style>
        /* CARD IMAGE WRAPPER */
        .project-img {
            position: relative;
            height: 300px;
            overflow: hidden;
            border-radius: 12px;

            /* SCROLL IMAGE */
            background-size: cover;
            background-position: top center;
            background-repeat: no-repeat;

            transition: background-position 6s linear;
        }

        /* MAIN IMAGE OVERLAY */
        .project-img::before {
            content: "";
            position: absolute;
            inset: 0;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: opacity 0.3s ease;
        }

        /* HOVER EFFECT */
        .project-item:hover .project-img {
            background-position: bottom center;
        }

        .project-item:hover .project-img::before {
            opacity: 0;
        }
    </style>
@endsection

@section('content')
    <section class="tj-project-section-2 section-gap">
        <div class="container">
            <div class="row rg-30">

                @foreach ($projects as $project)
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="project-item">

                            {{-- IMAGE --}}
                            <div class="project-img"
                                style="
                                background-image: url('{{ asset($project->scroll_image) }}');
                            ">
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
                                        <a href="{{ route('frontend.projects', ['category' => $project->category]) }}">
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
        </div>
    </section>
@endsection
