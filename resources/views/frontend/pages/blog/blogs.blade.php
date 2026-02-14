@extends('frontend.layouts.master')

@section('title', 'Blogs')

@section('css')

@endsection

@section('breadcrumb-items')
@endsection

@section('content')
    <!-- start: Blog Section -->
    <section class="tj-blog-section section-gap">
        <div class="container">
            <div class="row row-gap-5">
                <div class="col-lg-8">
                    <div class="blog-post-wrapper">
                        @if (isset($blogs) && count($blogs) > 0)
                        @foreach ($blogs as $blog)
                            <article class="blog-item tj-fade-anim">
                                <div class="blog-thumb">
                                    <a href="{{ route('frontend.blogs', ['category' => $blog->blogCategory->slug, 'blog' => $blog->slug]) }}"><img src="{{ $blog->main_image }}"
                                            alt="{{ $blog->title }}" /></a>
                                    <div class="blog-date">
                                        <span class="date">{{ $blog->created_at->format('d') }}</span>
                                        <span class="month">{{ strtoupper($blog->created_at->format('M')) }}</span>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-meta">
                                        <span class="categories"><a href="{{ route('frontend.blogs', ['category' => $blog->blogCategory->slug]) }}">{{ $blog->blogCategory->name }}</a></span>
                                        <span>By <a href="{{ route('frontend.blogs', ['category' => $blog->blogCategory->slug, 'blog' => $blog->slug]) }}">{{ $blog->user->name }}</a></span>
                                    </div>
                                    <h3 class="title"><a href="{{ route('frontend.blogs', ['category' => $blog->blogCategory->slug, 'blog' => $blog->slug]) }}">{{ $blog->title }}</a></h3>
                                    <p class="desc">
                                        {{ $blog->meta_description }}
                                    </p>
                                    <a class="tj-primary-btn" href="{{ route('frontend.blogs', ['category' => $blog->blogCategory->slug, 'blog' => $blog->slug]) }}">
                                        <span class="btn-text"><span>Read More</span></span>
                                        <span class="btn-icon"><i class="tji-arrow-right-2"></i></span>
                                    </a>
                                </div>
                            </article>
                        @endforeach
                        @else
                            <p>No Blog Found</p>
                        @endif

                        @if ($blogs->hasPages())
                        <div class="tj-pagination d-flex">
                            <ul>

                                {{-- Previous Button --}}
                                @if ($blogs->onFirstPage())
                                    <li>
                                        <span class="page-numbers disabled">
                                            <i class="tji-arrow-left-2"></i>
                                        </span>
                                    </li>
                                @else
                                    <li>
                                        <a class="prev page-numbers" href="{{ $blogs->previousPageUrl() }}">
                                            <i class="tji-arrow-left-2"></i>
                                        </a>
                                    </li>
                                @endif


                                {{-- Page Numbers --}}
                                @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    <li>
                                        @if ($page == $blogs->currentPage())
                                            <span aria-current="page" class="page-numbers current">
                                                {{ $page }}
                                            </span>
                                        @else
                                            <a class="page-numbers" href="{{ $url }}">
                                                {{ $page }}
                                            </a>
                                        @endif
                                    </li>
                                @endforeach


                                {{-- Next Button --}}
                                @if ($blogs->hasMorePages())
                                    <li>
                                        <a class="next page-numbers" href="{{ $blogs->nextPageUrl() }}">
                                            <i class="tji-arrow-right-2"></i>
                                        </a>
                                    </li>
                                @else
                                    <li>
                                        <span class="page-numbers disabled">
                                            <i class="tji-arrow-right-2"></i>
                                        </span>
                                    </li>
                                @endif

                            </ul>
                        </div>
                        @endif

                    </div>
                </div>
                @include('frontend.pages.blog.blog-sidebar')
            </div>
        </div>
    </section>
    <!-- end: Blog Section -->

    @include('frontend.pages.sections.cta')
@endsection

@section('script')

@endsection
