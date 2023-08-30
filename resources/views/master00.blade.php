<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	{{--
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
	<script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}">
	</script> --}}




	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
		integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
	</script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- ===============================================new added======================= -->

	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">
	<!-- StyleSheet -->


	<link rel="manifest" href="/manifest.json">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">



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

	<script src="{{ asset('frontend/js/active.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
	<script src="{{ asset('frontend/js/jquery-migrate-3.0.0.js') }}"></script>
	<script src="{{ asset('frontend/js/nicesellect.js') }}"></script>
	<script src="{{ asset('frontend/js/owl-carousel.js') }}"></script>
	<script src="{{ asset('frontend/js/popper.min.js') }}"></script>
	<script src="{{ asset('frontend/js/slicknav.js') }}"></script>
	<script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>


	@stack('styles')



	<link
		href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
		rel="stylesheet">
	<!-- StyleSheet -->
	<link rel="manifest" href="/manifest.json">
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/niceselect.css')}}">
	<!-- Animate CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
	<!-- Flex Slider CSS -->
	<link rel="stylesheet" href="{{asset('frontend/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
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






	<title>cumillastore</title>
</head>

<body>
	<div class="container">


		{{-- {{ View:: make('header') }} --}}
		{{-- @livewire('header-component'); --}}




		{{-- @yield('content') --}}
		{{ slot }}




		{{--
		<!-- {{ View:: make('footer') }} --> --}}
		{{-- @livewire('footer-component'); --}}



	</div>
	{{-- @stack('scripts') --}}
</body>
<style>
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
</style>
<script>
	// $(document).ready(function() {
// 	$("button").click(function() {
// 		alert("hi hello")
// 	})
// })
// 
</script>



</html>