<main id="main ">

    <div class="container ">
        <div class="custom-product">

            <div class="wrap-main-slide ">
                <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true"
                    data-dots="false">
                    @foreach ($banner as $slide)
                    <div class="item-slide">
                        <img src="{{ asset('images/MainSliders') }}/{{$slide->image}}" alt="" class="img-slide">
                        <div class="slide-info slide-1">
                            <h2 class="f-title">
                                <b>{{$slide->title}}</b>
                            </h2>
                            <span class="subtitle"
                                style="background: yellow !important;color:red !important;">{{$slide->subtitle}}</span>
                            <p class="sale-info" style="color:red !important;"> <span class="price"
                                    style="background: white !important;color:green !important;">{{$slide->price}}</span>
                            </p>
                            <a href="{{$slide->link}}" class="btn-link">Shop Now</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            {{-- ==================================================================== --}}
            <!--BANNER-->
            <section class="welcome-area section-padding2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <div class="welcome-img">
                                <img src="images/welcome-bg.png" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <div class="mt-5 welcome-text mt-md-0">
                                <h3><span class="style-change">welcome</span> <br>to sazzad kitchen</h3>
                                <p class="pt-3">
                                    Welcome to sazzad kitchen!
                                    We serve a variety of dishes made with freshly item and seasonal
                                    home made specialties cooked with local ingredients.We guaranty the best village
                                    test.Some of them you never tested before in such a way.We think about your
                                    setisfaction because
                                    this is our passion not profession.



                                </p>
                                <p>
                                    Just order with clear explanation and we will make you happay definatly.We promise.
                                </p>
                                <a href="#" class="mt-3 template-btn">book a table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            {{-- ======================================Main products===================================== --}}

            <section class="food-area section-padding">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="section-top">
                                <h3><span class="style-change">
                                        We serve
                                    </span> <br>
                                    delicious food
                                </h3>
                                <p class="pt-3">
                                    They're so nice and unique food. If you try once, definately you will order more.We
                                    guaranty
                                    your 100% satisfaction.Just order and we will fix your amount that adjust with your
                                    payment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        @foreach ( $specialproducts as $sproduct )


                        <div class="col-md-4 col-sm-6 product-thumnail">
                            <div class="single-food">
                                <div class="food-img img-fluid">



                                    <a href="detail/{{ $sproduct->id }}" title="{{$sproduct->name}}">

                                        <figure>

                                            <img class="hover-img"
                                                src="{{ asset('images/products/') }}/{{$sproduct->image}}"
                                                alt="{{$sproduct->name}}">
                                        </figure>
                                    </a>



                                </div>
                                <div class="food-content">
                                    <div class="d-flex justify-content-between">
                                        <h5 style="color:blue;">{{ $sproduct->name }}</h5>



                                        <h5 style="color:red;">Quantity:{{ $sproduct->quantity}}</h5>
                                        <span class="style-change">
                                            <h6>{{ $sproduct->price }}-tk</h6>
                                        </span>
                                    </div>
                                    <p class="pt-3" style="font-style:italic;color:blueviolet">
                                        {{ $sproduct->short_desc }}
                                    </p>
                                    <a class="btn btn-warning" data-toggle="modal" data-target="#{{ $sproduct->id }}"
                                        title="Quick View" href="#">.<i class=" ti-eye">.quick view</i></a>
                                </div>
                            </div>




                        </div>
                        @endforeach





                    </div>
                </div>


            </section>



        </div>
    </div>








    {{-- ============================== Category wise products ============================== --}}





    <div class="s_white_title" style="background: url('images/tinybanner/ban-0.jpg');">
        <h3 style="color:cyan !important;">Find Your Product from categories</h3>
        <h2>Click on every category and choice the best fit.</h2>
    </div>

    <div class="wrap-products container">
        <div class="wrap-product-tab tab-style-1">
            <div class="tab-control">
                @foreach($totalcategories as $key=>$category)


                <a href=" #category_{{$category->id}}" class="tab-control-item {{$key==0 ? 'active':''}}">

                    {{$category->title}}</a>
                @endforeach
            </div>

            <div class="tab-contents">
                @foreach ($totalcategories as $key=>$category)
                <div class="tab-content-item {{$key==0 ? 'active':''}}" id="category_{{$category->id}}">
                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                        data-loop="false" data-nav="true" data-dots="false"
                        data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>
                        @php
                        $c_products
                        =DB::table('products')->where('categories_id',$category->id)->get();
                        @endphp

                        @foreach ($c_products as $c_product)

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="detail/{{ $c_product->id }}" title="{{$c_product->name}}">

                                    <figure>
                                        <img src="{{ asset('images/products') }}/{{$c_product->image}}" width="800"
                                            height="800" alt="{{$c_product->name}}">
                                    </figure>
                                </a>
                            </div>
                            <div class="product-info">
                                <a href="detail/{{ $c_product->id }}" class="product-name">
                                    <span style="color:blue;">{{$c_product->name}}</span>
                                    <span style="color:red;font-size:15px;">{{$c_product->quantity}}</span>


                                    <div class="wrap-price"><span class="product-price"
                                            style="color:darkgoldenrod;">{{$c_product->price}} _tk</span>
                                    </div>
                                    <div class="wrap-price"><span class="product-name"
                                            style="font-style:italic;color:blueviolet">{{$c_product->short_desc}}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                @endforeach


            </div>

        </div>
    </div>
    </div>



    {{-- =============================Latest Products======================================= --}}

    <div class="wrap-show-advance-info-box style-1">
        <h3 class="title-box">Latest Products</h3>
        <div class="wrap-top-banner" style="display: flex;justify-content: center;">
            <a href="#" class="link-banner banner-effect-2">
                <figure><img src="{{ asset('images/tinybanner/subbanner-1.png') }}" width="100%" height="240" alt="">
                </figure>
            </a>
        </div>
        <div class="wrap-products">
            <div class="wrap-product-tab tab-style-1">
                <div class="tab-contents">
                    <div class="tab-content-item active" id="digital_1a">
                        <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container"
                            data-items="5" data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                            @foreach ($products as $lproduct)

                            <div class="product product-style-2 equal-elem ">

                                <div class="product-thumnail">
                                    <a href="detail/{{ $lproduct->id }}" title="{{$lproduct->name}}">

                                        <figure>

                                            <img class="hover-img"
                                                src="{{ asset('images/products/') }}/{{$lproduct->image}}" width="800"
                                                height="800" alt="{{$lproduct->name}}">
                                        </figure>
                                    </a>
                                </div>



                                <div class="product-info">
                                    <a href="detail/{{ $lproduct->id }}" class="product-name">
                                        <span style="color:blue;">{{$lproduct->name}}</span>
                                        <span style="color:red;font-size:15px;">{{$lproduct->quantity}}</span>


                                        <div class="wrap-price"><span class="product-price"
                                                style="color:darkgoldenrod; color-hover:black;">{{$lproduct->price}}
                                                _tk</span>
                                        </div>
                                        <div class="wrap-price"><span class="product-name"
                                                style="font-style:italic;color:blueviolet">{{$lproduct->short_desc}}</span>
                                        </div>
                                    </a>
                                </div>
                            </div>


                            @endforeach


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('livewire.newsletter-component')


    @push('styles')


    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-01.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-02.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color-03.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">




    @endpush



    <script>
        var owl = $('.owl2');
	owl.owlCarousel({
		items: 4,
		loop: true,
		margin: 5,
		nave: true,
		autoplay: true,
		autoplayTimeout: 1000,
		autoplayHoverPause: true


	});
	$('.play').on('click', function() {
		owl.trigger('play.owl.autoplay', [1000])
	})
	$('.stop').on('click', function() {
		owl.trigger('stop.owl.autoplay')
	})
	owl.on('mousewheel', '.owl-stage', function(e) {
		if (e.deltaY > 0) {
			owl.trigger('next.owl');
		} else {
			owl.trigger('prev.owl');
		}
		e.preventDefault();
	});
    </script>
    </div>
</main>
