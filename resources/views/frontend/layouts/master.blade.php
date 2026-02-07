
<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <title>@yield('title') - Siteffect Solutions</title>
    @include('frontend.layouts.meta')
    @include('frontend.layouts.css')
    @yield('css')
  </head>

  <body>
    <div class="body-overlay"></div>

    @include('frontend.layouts.header')

    <div id="smooth-wrapper">
      <div id="smooth-content">
        <main id="primary" class="site-main">
          <div class="top-space-30"></div>
          @if (!request()->routeIs('frontend.home'))
            <!-- start: Breadcrumb Section -->
            <section class="tj-page-header fix">
                <div class="hero-bg" data-bg-image="{{ asset('frontAssets/images/hero/hero-bg.webp') }}"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="tj-page-header-content text-center">
                                <h1 class="tj-page-title tj-split-text-2">@yield('title')</h1>
                                <div class="tj-page-link tj-fade-anim" data-delay="0.3">
                                    <span><i class="tji-home"></i></span>
                                    <span>
                                        <a href="{{ route('frontend.home') }}">Home</a>
                                    </span>
                                    <span><i class="tji-arrow-right"></i></span>
                                    <span>
                                        <span>@yield('title')</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end: Breadcrumb Section -->
          @endif
          @yield('content')
        </main>

        @include('frontend.layouts.footer')
      </div>
    </div>

    <!-- JS here -->
    @include('frontend.layouts.script')
    @yield('script')
  </body>
</html>
