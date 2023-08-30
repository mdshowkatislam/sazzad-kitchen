<main id="main" class="main-site">

    <div class="container">


        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Your desired Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                            data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>
                            @foreach ($products as $r_product)
                            <div class="product product-style-2 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="/detail/{{ $r_product->id }}" title="{{$r_product->name}}">
                                        <figure><img src="{{ asset('images/products') }}/{{$r_product->image}}"
                                                width="214" height="214" alt="{{$r_product->name}}"></figure>
                                    </a>
                                    <div class="group-flash">
                                        <span class="flash-item new-label">new</span>
                                    </div>
                                    <div class="wrap-btn">
                                        <a href="#" class="function-link">quick view</a>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <a href="/detail/{{ $r_product->id }}"
                                        class="product-name"><span>{{$r_product->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$r_product->price}}</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <!--End wrap-products-->
                </div>
            </div>

            <!--end main products area-->

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget widget-our-services ">
                    <div class="widget-content">
                        <ul class="our-services">

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Free Shipping</b>
                                        <span class="subtitle">On Oder Over 1000 tk</span>
                                        <p class="desc">Over 1000 tk, you will get free shipping....</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-gift" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Special Offer</b>
                                        <span class="subtitle">Get a gift,over 2000tk order!</span>
                                        <p class="desc">(but must call(0192457084) before the confirmation) ...</p>
                                    </div>
                                </a>
                            </li>

                            <li class="service">
                                <a class="link-to-service" href="#">
                                    <i class="fa fa-reply" aria-hidden="true"></i>
                                    <div class="right-content">
                                        <b class="title">Order Return</b>
                                        <span class="subtitle">Afer giving order you can not cancel that order and also
                                            the item.</span>
                                        <p class="desc">please call(0192457084), to confirm about your specefic
                                            items.( We will try best to help.)</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- Categories widget-->



            </div>
            <!--end sitebar-->



        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>
