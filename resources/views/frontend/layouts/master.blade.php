
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
