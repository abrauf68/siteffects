<!-- Critical CSS + JS via Vite -->
@vite([
    'resources/css/bootstrap.min.css',
    'resources/css/tekmino-icon.css',
    'resources/css/nice-select.css',
    'resources/css/swiper.min.css',
    'resources/css/venobox.min.css',
    'resources/css/meanmenu.css',
    'resources/css/leaflet.css',
    'resources/css/main.css',
    'resources/js/app.js'
])

<!-- Optional / Non-critical CSS (Toastr) preloaded async -->
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" as="style"
    onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</noscript>
