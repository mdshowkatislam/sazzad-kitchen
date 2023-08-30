<main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="" class="link">home</a></li>
                <li class="item-link"><span>detail</span></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
                <div class="wrap-product-detail">
                    <div class="detail-media">
                        <div class="product-gallery" wire:ignore>
                            <ul class="slides">

                                <li data-thumb="{{ asset('images/products') }}/{{$product->image}}">
                                    <img src="{{ asset('images/products') }}/{{$product->image}}"
                                        alt="{{$product->name}}" />
                                </li>
                                @php
                                $images = explode(",", $product->images);


                                @endphp
                                @foreach($images as $image)
                                @if($image)
                                <li data-thumb="{{ asset('images/products') }}/{{$image}}">
                                    <img src="{{ asset('images/products') }}/{{$image}}" alt="{{$product->name}}" />
                                </li>
                                @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="detail-info">

                        <h2 class="product-name">{{$product->name}}</h2>
                        <div class="short-desc">

                            <p> {{ $product->des }} </p>
                        </div>
                        <div class="short-desc">

                            <p> {{ $product->des }} </p>
                        </div>


                        <div class="wrap-social">
                            <a class="link-socail" href="#"><img src="{{ asset('images/other/social-list.png') }}"
                                    alt=""></a>
                        </div>

                        @if($product->price > 0 && $sale->status == 'active' && $sale->sale_date > Carbon\Carbon::now())
                        <div class="wrap-price">
                            <span class="product-price">{{$product->price}}</span>
                            <del><span class="product-price regprice">{{$product->price}}</span></del>
                        </div>
                        @else
                        <div class="wrap-price"><span class="product-price">{{$product->price}}</span></div>
                        @endif


                        <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->

                        <div class="quantity">
                            <span>Quantity:</span>
                            <div class="quantity-input" style="width: 210px">
                                <input type="text" name="product-quatity" value="1" data-max="120" pattern="[0-9]*"
                                    wire:model="qty">
                                <a class="btn btn-reduce" href="#" wire:click.prevent="decreaseQuantity"></a>
                                <a class="btn btn-increase" href="#" wire:click.prevent="increaseQuantity"></a>
                            </div>
                        </div>




                        <div class="wrap-butons text-lg ">

                            <a href="#" class="btn add-to-cart"
                                wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->price}})"
                                style="color:aqua!important">Add
                                to Cart</a>

                            <div class="wrap-btn wrap ">
                                <br>
                                <a href="#" class="btn btn-wishlist" style="color:rgb(24, 190, 173) !important">Add
                                    Wishlist</a>
                            </div>
                        </div>
                    </div>

                    <div class="advance-info">
                        <div class="tab-control normal">
                            <a href="#description" class="tab-control-item active">description</a>
                            <a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
                            <a href="#review" class="tab-control-item">Reviews</a>
                        </div>
                        <div class="tab-contents">
                            <div class="tab-content-item active" id="description">
                                {!! $product->des !!}
                            </div>













                            <div class="tab-content-item " id="add_infomation">
                                {!! $product->aditional_desc !!}
                            </div>
                            <div class="tab-content-item " id="review">

                                <div class="wrap-review-form">
                                    <style>
                                        .width-0-percent {
                                            width: 0%;
                                        }

                                        .width-20-percent {
                                            width: 20%;
                                        }

                                        .width-40-percent {
                                            width: 40%;
                                        }

                                        .width-60-percent {
                                            width: 60%;
                                        }

                                        .width-80-percent {
                                            width: 80%;
                                        }

                                        .width-100-percent {
                                            width: 100%;
                                        }
                                    </style>

                                    <div id="comments">
                                        <h2 class="woocommerce-Reviews-title">
                                            {{$product->order_items->where('rstatus', 1)->count()}} review for
                                            <span>{{$product->name}}</span>
                                        </h2>
                                        <ol class="commentlist">
                                            @foreach($product->order_items->where('rstatus', 1) as $orderItem)
                                            <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1"
                                                id="li-comment-20">
                                                <div id="comment-20" class="comment_container">
                                                    <img alt="{{$orderItem->order->user->name}}"
                                                        src="{{ asset('assets/images/profile') }}/{{$orderItem->order->user->profile->image}}"
                                                        height="80" width="80">
                                                    <div class="comment-text">
                                                        <div class="star-rating">
                                                            <span
                                                                class="width-{{ $orderItem->review->rating * 20 }}-percent">Rated
                                                                <strong
                                                                    class="rating">{{$orderItem->review->rating}}</strong>
                                                                out of 5</span>
                                                        </div>
                                                        <p class="meta">
                                                            <strong
                                                                class="woocommerce-review__author">{{$orderItem->order->user->name}}</strong>
                                                            <span class="woocommerce-review__dash">–</span>
                                                            <time class="woocommerce-review__published-date"
                                                                datetime="2008-02-14 20:00">{{Carbon\Carbon::parse($orderItem->review->created_at)->format('d
                                                                F Y g:i A')}}</time>
                                                        </p>
                                                        <div class="description">
                                                            <p>{{$orderItem->review->comment}}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ol>
                                    </div><!-- #comments -->

                                </div>
                            </div>
                        </div>
                    </div>
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

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products:</h2>
                    <div class="widget-content">
                        <ul class="products">
                            @foreach ($popular_products as $p_product)
                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="/detail/{{ $p_product->id }}" title="{{$p_product->name}}">
                                            <figure><img src="{{ asset('images/products') }}/{{$p_product->image}}"
                                                    alt="{{$p_product->name}}"></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">

                                        <a href="/detail/{{ $p_product->id }}" title="{{$p_product->name}}"
                                            class="product-name"><span>{{$p_product->name}}</span></a>
                                        <div class="wrap-price"><span
                                                class="product-price">${{$p_product->price}}</span></div>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

            </div>
            <!--end sitebar-->

            <div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Related Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5"
                            data-loop="false" data-nav="true" data-dots="false"
                            data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}'>
                            @foreach ($related_products as $r_product)
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

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>
