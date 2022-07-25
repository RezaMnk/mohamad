<!-- Include Scripts -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/greensock.js') }}"></script>
<script src="{{ asset('js/layerslider.transitions.js') }}"></script>
<script src="{{ asset('js/layerslider.kreaturamedia.jquery.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/jquery.countdown.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>

@if($errors->any())
    <script src="/vendor/sweetalert/sweetalert.all.js"></script>
@endif

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        width: '32rem',
        padding: '1.25rem',
        showCloseButton:true,
    })

    @foreach($errors->all() as $error)
        Toast.fire({
            icon: 'error',
            title: '{{ $error }}'
        })
    @endforeach

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
        height: 550
    });
</script>
