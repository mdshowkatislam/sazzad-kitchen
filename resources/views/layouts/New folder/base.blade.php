<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sazzad-kitchen</title>

    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">
    <link
        href="https://fonts.googleapis.com/css?family=Lato:300,400,400italic,700,700italic,900,900italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Open%20Sans:300,400,400italic,600,600italic,700,700italic&amp;subset=latin,latin-ext"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/chosen.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">

    <link
        href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <!-- StyleSheet -->
    <link rel="manifest" href="/mix-manifest.json">
    <!-- Bootstrap -->

    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
    <!-- Fancybox -->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">
    <!-- Themify Icons & all main product cart and wishlist icons  -->
    <link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">



    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/niceselect.css')}}">

    <!-- Slicknav -->
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">
    <!-- Jquery Ui -->
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">

    <!-- Eshop StyleSheet -->

    <link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <script type='text/javascript'
        src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons'
        async='async'>
    </script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.css"
        integrity="sha512-KRrxEp/6rgIme11XXeYvYRYY/x6XPGwk0RsIC6PyMRc072vj2tcjBzFmn939xzjeDhj0aDO7TDMd7Rbz3OEuBQ=="
        crossorigin="anonymous" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
        integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
        crossorigin="anonymous" />


    <style>
        /* Multilevel dropdown */
        .dropdown-submenu {
            position: relative;
        }

        .dropdown-submenu>a:after {
            content: "\f0da";
            float: right;
            border: none;
            font-family: 'FontAwesome';
        }

        .dropdown-submenu>.dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: 0px;
            margin-left: 0px;
        }


        * {
            margin: 0;
            padding: 0;
            background-size: cover;

        }

        img.slider-img {
            height: 400px !important;
        }

        .custom-product {
            height: 600px;
        }

        .custom-login {
            height: 500px;
            padding: 100px;
        }

        .slider-text {
            color: red !important;
        }

        .trending-img {
            height: 100px !important;
        }

        .trending-item {
            width: 20%;
            float: left;
        }

        .trending-wrapper {
            margin: 30px;
        }

        .detail-img {
            height: 230px !important;
        }

        .oneProductView {
            color: blueviolet;
        }

        .search-box {
            width: 350px !important;
        }

        .search-text {
            color: blue;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .searchin-img {
            height: 200px;
        }

        .cart-separator {
            border-bottom: 2px solid chartreuse;
            margin-bottom: 20px;
            padding-bottom: 20px;
        }

        .orderpayment {
            font-family: sans-serif;
            color: green;
        }

        /* .sticky {
			position: fixed;
			width: 100%;
			z-index: 9999;
		} */
    </style>
    @livewireStyles
    @stack('styles')

</head>

<body class="home-page home-01 ">




    @livewire('header-component')

    {{$slot}}
    @livewire('footer-component')




    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>

    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('assets/js/chosen.jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
    <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>



    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.3/nouislider.min.js"
        integrity="sha512-EnXkkBUGl2gBm/EIZEgwWpQNavsnBbeMtjklwAa7jLj60mJk932aqzXFmdPKCG6ge/i8iOCK0Uwl1Qp+S0zowg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
        crossorigin="anonymous"></script>

    <script src="https://cdn.tiny.cloud/1/5li18bdseryf1zdtb5pz5m3cwtovsmm3udylfimngndq55u3/tinymce/5/tinymce.min.js"
        referrerpolicy="origin">




    </script>


    @livewireScripts
    @stack('scripts')


</body>


</html>
