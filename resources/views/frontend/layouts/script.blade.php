<!-- Plugin JS File -->
<script src="{{ asset('frontAssets/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/gsap.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/gsap-scroll-smoother.js') }}"></script>
<script src="{{ asset('frontAssets/js/gsap-scroll-to-plugin.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/gsap-scroll-trigger.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/gsap-split-text.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/swiper.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/counterup.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/venobox.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/meanmenu.js') }}"></script>
<script src="{{ asset('frontAssets/js/gsap-animation.js') }}"></script>
<script src="{{ asset('frontAssets/js/matter.min.js') }}"></script>
<script src="{{ asset('frontAssets/js/throwable.js') }}"></script>
<script src="{{ asset('frontAssets/js/main.js') }}"></script>
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
