@extends('frontend.layouts.master')

@section('title', $blog->title)

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
                    <div class="post-details-wrapper">
                        <div class="blog-images">
                            <img src="{{ asset($blog->main_image) }}" alt="{{ $blog->title }}" />
                        </div>
                        <h2 class="title">{{ $blog->title }}</h2>
                        <div class="blog-category-two">
                            <div class="category-item">
                                <div class="cate-images">
                                    <img src="{{ asset($blog->user->avatar ?? 'assets/img/default/user.png') }}"
                                        alt="Images" />
                                </div>
                                <div class="cate-text">
                                    <span class="degination">Authored by</span>
                                    <h6 class="title"><a href="#">{{ $blog->user->name }}</a></h6>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="cate-icons">
                                    <i class="tji-calendar"></i>
                                </div>
                                <div class="cate-text">
                                    <span class="degination">Date Released</span>
                                    <h6 class="text">{{ $blog->created_at->format('d M, Y') }}</h6>
                                </div>
                            </div>
                            <div class="category-item">
                                <div class="cate-icons">
                                    <i class="tji-comment"></i>
                                </div>
                                <div class="cate-text">
                                    <span class="degination">Comments</span>
                                    <h6 class="text">{{ $blog->blog_comments_count }} Comments</h6>
                                </div>
                            </div>
                        </div>
                        <div class="blog-text">
                            {!! $blog->content !!}

                            <blockquote>
                                <p>
                                    {{ $randomQuote->quote }}
                                </p>
                                <cite>{{ $randomQuote->author }}</cite>
                            </blockquote>
                        </div>
                        <div class="tj-tags-post">
                            <div class="tagcloud">
                                <span>Tags:</span>
                                @foreach (json_decode($blog->tags ?? '[]') as $tag)
                                    <a
                                        href="{{ route('frontend.blogs') }}?tag={{ $tag }}">{{ $tag }}</a>
                                @endforeach
                            </div>
                            <div class="post-share">
                                <ul>
                                    <li>Share:</li>
                                    {{-- Facebook --}}
                                    <li>
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                                            target="_blank">
                                            <i class="tji-facebook"></i>
                                        </a>
                                    </li>
                                    {{-- X / Twitter --}}
                                    <li>
                                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ urlencode(request()->fullUrl()) }}"
                                            target="_blank">
                                            <i class="tji-x-twitter"></i>
                                        </a>
                                    </li>
                                    {{-- Instagram (Note: Instagram doesn't allow direct post sharing) --}}
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <i class="tji-instagram"></i>
                                        </a>
                                    </li>
                                    {{-- LinkedIn --}}
                                    <li>
                                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                                            target="_blank">
                                            <i class="tji-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <div class="tj-post__navigation">
                            <!-- previous post -->
                            <div class="tj-nav__post previous">
                                <div class="tj-nav-post__nav prev_post">
                                    <a href="{{ route('frontend.blogs', ['category' => $previousBlog->blogCategory->slug, 'blog' => $previousBlog->slug]) }}"><span><i class="tji-arrow-left-5"></i></span>Previous</a>
                                </div>
                            </div>
                            <div class="tj-nav-post__grid">
                                <a href="{{ route('frontend.blogs') }}"><i class="tji-window"></i></a>
                            </div>
                            <!-- next post -->
                            <div class="tj-nav__post next">
                                <div class="tj-nav-post__nav next_post">
                                    <a href="{{ route('frontend.blogs', ['category' => $nextBlog->blogCategory->slug, 'blog' => $nextBlog->slug]) }}">Next<span><i class="tji-arrow-right-5"></i></span></a>
                                </div>
                            </div>
                        </div>

                        <div class="tj-comments-container">
                            <div class="tj-comments-wrap">
                                <div class="comments-title">
                                    <h3 class="title">Top Comments ({{ $blog->blog_comments_count }})</h3>
                                </div>
                                <div class="tj-latest-comments">
                                    <ul>
                                        @if (isset($blogComments) && count($blogComments) > 0)
                                            @foreach ($blogComments as $blogComment)
                                                <li class="tj-comment">
                                                    <div class="comment-content">
                                                        <div class="comment-avatar">
                                                            <img src="{{ asset($blogComment->user->avatar ?? 'assets/img/default/user.png') }}" alt="Image" />
                                                        </div>
                                                        <div class="comments-header">
                                                            <div class="avatar-name">
                                                                <h6 class="title">
                                                                    <a href="blog-details.html">{{ $blogComment->user->name }}</a>
                                                                </h6>
                                                            </div>
                                                            <div class="comment-text">
                                                                <span class="date">{{ $blogComment->created_at->format('F d, Y \a\t h:i a') }}</span>
                                                                {{-- <a class="comment-reply-link" href="blog-details.html">Reply</a> --}}
                                                            </div>
                                                            <div class="desc">
                                                                <p>
                                                                    {{ $blogComment->message }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Comment</h3>
                                <form action="{{ route('frontend.blogs.comment.submit') }}" method="POST">
                                    @csrf
                                    <input type="text" name="blog_id" value="{{ $blog->id }}" hidden>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-input">
                                                <textarea id="comment" name="message" placeholder="Write Your Comment *">{{ old('message') }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input">
                                                <input type="text" id="name" name="name"
                                                    placeholder="Full Name *" required="" value="{{ old('name') }}"/>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-input">
                                                <input type="email" id="emailOne" name="email"
                                                    placeholder="Your Email *" required=""  value="{{ old('email') }}"/>
                                            </div>
                                        </div>
                                        <div class="form-submit">
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
                @include('frontend.pages.blog.blog-sidebar')
            </div>
        </div>
    </section>
    <!-- end: Blog Section -->

    @include('frontend.pages.sections.cta')
@endsection

@section('script')

@endsection
