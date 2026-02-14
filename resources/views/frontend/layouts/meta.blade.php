<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="title" content="@yield('meta_title')">
<meta name="description" content="@yield('meta_description')">
<meta name="keywords" content="@yield('meta_keywords')">
<meta name="author" content="@yield('author')">
<link rel="canonical" href="{{ url()->current() }}" />
<meta name="robots" content="index, follow">

<meta property="og:title" content="@yield('meta_title')" />
<meta property="og:description" content="@yield('meta_description')" />
<meta property="og:image" content="{{ asset('frontAssets/images/social-og.png') }}" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:type" content="website" />

<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('meta_title')">
<meta name="twitter:description" content="@yield('meta_description')">
<meta name="twitter:image" content="{{ asset('frontAssets/images/social-og.png') }}">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('frontAssets/images/logos/siteffect-icon.png') }}" />
