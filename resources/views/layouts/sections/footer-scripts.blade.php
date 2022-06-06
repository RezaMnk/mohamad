<!-- Include Scripts -->
<script src="{{ asset('TEST') }}js/jquery.min.js"></script>
<script src="{{ asset('js/greensock.js') }}"></script>
<script src="{{ asset('js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

<script>

    $('#watch-slider').layerSlider({
        sliderVersion: '6.0.5',
        maxRatio: 1,
        type: 'responsive',
        responsiveUnder: 1024,
        layersContainer: 1420,
        hideUnder: 0,
        hideOver: 100000,
        skin: 'v6',
        globalBGColor: '#ffffff',
        navStartStop: false,
        skinsPath: 'assets/skins/',
        height: 450
    });
</script>
