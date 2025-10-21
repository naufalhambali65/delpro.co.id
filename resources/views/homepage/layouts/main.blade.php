<!DOCTYPE html>
<html lang="en">

<head>
    <title>DELPRO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="{{ asset('/homepage_assets/images/logo/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />


    <link rel="stylesheet" href="/homepage_assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/homepage_assets/css/animate.css">

    <link rel="stylesheet" href="/homepage_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/homepage_assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/homepage_assets/css/magnific-popup.css">

    <link rel="stylesheet" href="/homepage_assets/css/aos.css">

    <link rel="stylesheet" href="/homepage_assets/css/ionicons.min.css">

    <link rel="stylesheet" href="/homepage_assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/homepage_assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="/homepage_assets/css/flaticon.css">
    <link rel="stylesheet" href="/homepage_assets/css/icomoon.css">
    <link rel="stylesheet" href="/homepage_assets/css/style.css">

    {{-- sweet alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .logo-wrapper {
            position: relative;
        }

        .logo-wrapper img {
            position: absolute;
            z-index: -1;
            top: -150px;
            /* naikkan logo ke atas navbar */
            left: -50px;
            /* bisa kamu ganti ke center kalau mau */
            height: 300px;
            /* atur tinggi logo */
            width: auto;
        }

        /* @media (max-width: 1367px) {
            .js-fullheight {
                height: 60vh !important;
            }

            .slider-item {
                background-position: center center;
                background-size: cover;
            }

            .home-slider .slider-menu {
                position: absolute !important;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%) !important;
                width: 100%;
                text-align: center;
                padding: 0 !important;
                margin: 0 auto;
            }

            .home-slider .slider-menu .col-md-7 {
                padding: 0 !important;
                margin: 0 auto !important;
            }

        } */
    </style>

    @yield('css')

</head>

<body>
    @include('homepage.layouts.navbar')
    @yield('container')
    @include('homepage.layouts.footer')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>


    <script src="/homepage_assets/js/jquery.min.js"></script>
    <script src="/homepage_assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/homepage_assets/js/popper.min.js"></script>
    <script src="/homepage_assets/js/bootstrap.min.js"></script>
    <script src="/homepage_assets/js/jquery.easing.1.3.js"></script>
    <script src="/homepage_assets/js/jquery.waypoints.min.js"></script>
    <script src="/homepage_assets/js/jquery.stellar.min.js"></script>
    <script src="/homepage_assets/js/owl.carousel.min.js"></script>
    <script src="/homepage_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/homepage_assets/js/aos.js"></script>
    <script src="/homepage_assets/js/jquery.animateNumber.min.js"></script>
    <script src="/homepage_assets/js/bootstrap-datepicker.js"></script>
    {{-- <script src="/homepage_assets/js/jquery.timepicker.min.js"></script> --}}
    <script src="/homepage_assets/js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    {{-- <script src="/homepage_assets/js/google-map.js"></script> --}}
    <script src="/homepage_assets/js/main.js"></script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success!',
                text: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 2500
            })
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: "{{ session('error') }}",
            })
        </script>
    @endif
    @if (session('waLink'))
        <script>
            // buka tab baru setelah halaman selesai load
            window.addEventListener('load', function() {
                window.open("{{ session('waLink') }}");
            });
        </script>
    @endif


    @yield('js')
</body>

</html>
