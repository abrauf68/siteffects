<div class="col-lg-4">
    <div class="tj-main-sidebar">
        <div class="tj-sidebar-widget widget-search tj-fade-anim">
            <h4 class="widget-title">Search here</h4>
            <div class="search-box">
                <form action="{{ route('frontend.blogs') }}" method="GET">
                    <input type="search" name="search" id="searchTwo" placeholder="Search here" />
                    <button type="submit" value="search">
                        <i class="tji-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="tj-sidebar-widget tj-recent-posts tj-fade-anim">
            <h4 class="widget-title">Related post</h4>
            <ul>
                @if (isset($relatedBlogs) && count($relatedBlogs) > 0)
                    @foreach ($relatedBlogs as $relatedBlog)
                        <li>
                            <div class="post-thumb">
                                <a
                                    href="{{ route('frontend.blogs', ['category' => $relatedBlog->blogCategory->slug, 'blog' => $relatedBlog->slug]) }}">
                                    <img src="{{ asset($relatedBlog->meta_image) }}"
                                        alt="{{ $relatedBlog->title }}" /></a>
                            </div>
                            <div class="post-content">
                                <h6 class="post-title">
                                    <a
                                        href="{{ route('frontend.blogs', ['category' => $relatedBlog->blogCategory->slug, 'blog' => $relatedBlog->slug]) }}">{{ $relatedBlog->title }}</a>
                                </h6>
                                <div class="blog-meta">
                                    <ul>
                                        <li>{{ strtoupper($relatedBlog->created_at->format('d M Y')) }}</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    @endforeach
                @else
                    <p>No Related Blog Found</p>
                @endif
            </ul>
        </div>
        <div class="tj-sidebar-widget widget-categories tj-fade-anim">
            <h4 class="widget-title">Categories</h4>
            <ul>
                @if (isset($topCategories) && count($topCategories) > 0)
                    @foreach ($topCategories as $topCategory)
                        <li>
                            <a href="{{ route('frontend.blogs', ['category' => $topCategory->slug]) }}">{{ $topCategory->name }}<span
                                    class="number">({{ $topCategory->blogs_count }})</span></a>
                        </li>
                    @endforeach
                @else
                    <p>No Category Found</p>
                @endif
            </ul>
        </div>
        <div class="tj-sidebar-widget widget-tag-cloud tj-fade-anim">
            <h4 class="widget-title">Tags</h4>
            <nav>
                <div class="tagcloud">
                    @if (isset($topTags) && count($topTags) > 0)
                        @foreach ($topTags as $tag => $count)
                            <a href="{{ route('frontend.blogs') }}?tag={{ $tag }}">{{ Str::ucfirst($tag) }}</a>
                        @endforeach
                    @else
                        <p>No Tag Found</p>
                    @endif
                </div>
            </nav>
        </div>
    </div>
</div>
