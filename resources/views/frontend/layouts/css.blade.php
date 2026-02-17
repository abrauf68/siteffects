{{-- Preconnect --}}
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

{{-- Bootstrap (CRITICAL – normal load) --}}
<link rel="stylesheet" href="{{ asset('frontAssets/css/bootstrap.min.css') }}">

{{-- Main CSS (CRITICAL – normal load) --}}
<link rel="stylesheet" href="{{ asset('frontAssets/css/main.css') }}">

{{-- Toastr (async) --}}
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</noscript>

{{-- Non-critical CSS --}}
@php
    $styles = [
        'tekmino-icon.css',
        'nice-select.css',
        'swiper.min.css',
        'venobox.min.css',
        'leaflet.css',
        'meanmenu.css'
    ];
@endphp

@foreach($styles as $style)
<link rel="preload" href="{{ asset('frontAssets/css/'.$style) }}"
      as="style"
      onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="{{ asset('frontAssets/css/'.$style) }}">
</noscript>
@endforeach
