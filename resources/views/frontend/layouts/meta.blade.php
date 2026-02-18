<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="title" content="@yield('meta_title')">
<meta name="description" content="@yield('meta_description')">
<meta name="keywords" content="@yield('meta_keywords')">
<meta name="author" content="@yield('author')">
<link rel="canonical" href="{{ url()->current() }}" />
<meta name="robots" content="index, follow">

<meta property="og:site_name" content="Siteffect Solutions" />
<meta property="og:title" content="@yield('meta_title')" />
<meta property="og:description" content="@yield('meta_description')" />
<meta property="og:image" content="{{ url('frontAssets/images/social-og.png') }}" />
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('meta_title')">
<meta name="twitter:description" content="@yield('meta_description')">
<meta name="twitter:image" content="{{ url('frontAssets/images/social-og.png') }}">

<!-- Favicon -->
<link rel="icon" href="{{ url('favicons/favicon.ico') }}" />
<link rel="icon" type="image/png" href="{{ url('favicons/favicon-96x96.png') }}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{ url('favicons/favicon.svg') }}" />
<link rel="shortcut icon" href="{{ url('favicons/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{ url('favicons/apple-touch-icon.png') }}" />
<link rel="manifest" href="{{ url('favicons/site.webmanifest') }}" />

<!-- Google Site Verification -->
<meta name="google-site-verification" content="uNBKxFv7nGT7AIXvEW8ZzUqUI69sIkF65NZTs-QZKHo" />

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-R1B3CT5CD2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-R1B3CT5CD2');
</script>
