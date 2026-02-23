<!-- Plugin JS File -->
<!-- Core JS Files -->
<script src="{{ asset('frontAssets/js/jquery.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/bootstrap.bundle.min.js') }}" defer></script>

<!-- GSAP Plugins -->
<script src="{{ asset('frontAssets/js/gsap.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/gsap-scroll-smoother.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/gsap-scroll-to-plugin.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/gsap-scroll-trigger.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/gsap-split-text.min.js') }}" defer></script>

<!-- Other Plugins -->
<script src="{{ asset('frontAssets/js/jquery.nice-select.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/swiper.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/waypoints.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/counterup.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/venobox.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/meanmenu.js') }}" defer></script>

<!-- Custom Scripts -->
<script src="{{ asset('frontAssets/js/gsap-animation.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/matter.min.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/throwable.js') }}" defer></script>
<script src="{{ asset('frontAssets/js/main.js') }}" defer></script>

<!-- Leaflet JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

<!-- Toastr JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    toastr.options = {
        "closeButton": false,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "2000"
    };
    @if (session('success'))
        toastr.success("{{ session('success') }}");
    @endif

    @if (session('error'))
        toastr.error("{{ session('error') }}");
    @endif

    @if (session('message'))
        toastr.info("{{ session('message') }}");
    @endif

    @if ($errors->any())
        toastr.error("{{ $errors->first() }}");
    @endif
</script>
