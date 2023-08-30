<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="/" class="link">home</a></li>
                <li class="item-link"><span>All products</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="banner-shop">
                    <a href="#" class="banner-link">
                        <figure><img src="{{ asset('images/tinybanner/bann-2.jpg') }}" alt=""></figure>
                    </a>
                </div>

                <div class="wrap-shop-control">

                    <h1 class="shop-title">cumilla store</h1>


                    <div class="wrap-right">

                        <div class="sort-item orderby ">


                            <select name="orderby" class="use-chosen" wire:model="sorting">
                                <option value="default" selected="selected">Default sorting</option>
                                <option value="date">Sort by newness</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>

                        <div class="sort-item product-per-page">
                            <select name="post-per-page" class="use-chosen" wire:model="pagesize">
                                <option value="12" selected="selected">12 per page</option>
                                <option value="16">16 per page</option>
                                <option value="18">18 per page</option>
                                <option value="21">21 per page</option>
                                <option value="24">24 per page</option>
                                <option value="30">30 per page</option>
                                <option value="32">32 per page</option>
                            </select>
                        </div>

                        <div class="change-display-mode">
                            <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                            <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                        </div>

                    </div>

                </div>
                <!--end wrap shop control-->

                <style>
                    .product-wish {
                        position: absolute;
                        top: 10%;
                        left: 0;
                        z-index: 99;
                        right: 30px;
                        text-align: right;
                        padding-top: 0;
                    }

                    .product-wish .fa {
                        color: #cbcbcb;
                        font-size: 32px;
                    }

                    .product-wish .fa:hover {
                        color: #ff7007;
                    }

                    .fill-heart {
                        color: #ff7007 !important;
                    }
                </style>

                <div class="row">
                    <ul class="product-list grid-products equal-container">
                        @php
                        $witems = Cart::instance('wishlist')->content()->pluck('id');
                        @endphp
                        @foreach ($products as $product)
                        <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                            <div class="product product-style-3 equal-elem ">
                                <div class="product-thumnail">
                                    <a href="detail/{{ $product->id }}" title="{{$product->name}}">
                                        <figure><img src="{{ asset('images/products') }}/{{$product->image}}"
                                                alt="{{$product->name}}"></figure>
                                    </a>
                                </div>
                                <div class="product-info">
                                    <a href="detail/{{ $product->id }}"
                                        class="product-name"><span>{{$product->name}}</span></a>
                                    <div class="wrap-price"><span class="product-price">${{$product->price}}</span>
                                    </div>



                                    <a href="#" class="btn add-to-cart"
                                        wire:click.prevent="store({{$product->id}}, '{{$product->name}}', {{$product->price}})">Add
                                        To Cart</a>

                                    <!-- product wishlist code -->
                                    <div class="product-wish">

                                        @if($witems->contains($product->id))
                                        <a href="#" wire:click.prevent="removeFromWishlist({{$product->id}})"><i
                                                class="fa fa-heart fill-heart"></i></a>
                                        @else
                                        <a href="#"
                                            wire:click.prevent="addWishlist({{$product->id}}, '{{$product->name}}', {{$product->price}})"><i
                                                class="fa fa-heart"></i></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <div class="wrap-pagination-info">
                    {{$products->links()}}
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
                <div class="widget mercado-widget categories-widget">
                    <h2 class="widget-title">All Categories</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            @foreach ($categories as $category)
                            <li>
                                <a href="{{route('product.category',['category_slug'=>$category->slug])}}"
                                    class="cate-link">{{$category->title}}</a>

                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div><!-- Categories widget-->



                <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Price <span class="text-info">{{$min_price}} - {{$max_price}}</span></h2>
                    <div class="widget-content" style="padding: 10px 5px 40px 5px;">
                        <div id="slider" wire:ignore></div>
                    </div>
                </div> <!-- Price-->



                <div class="widget mercado-widget filter-widget">


                    <div class="widget-banner">
                        <figure><img src="{{ asset('images/shutki vorta-3.jpg') }}" width="270" height="331" alt="">
                        </figure>
                    </div>

                </div><!-- Size -->

                <div class="widget mercado-widget widget-product">
                    <h2 class="widget-title">Popular Products</h2>



                    <div class="widget-content">
                        <ul class="products">
                            @foreach ($pp as $popular)



                            <li class="product-item">
                                <div class="product product-widget-style" style="width:130px; height:130px;">
                                    <div class="product-thumnail " style="height:110px;width:110px; border:2">
                                        <a href="detail/{{ $popular->id }}" title="{{$popular->name}}">

                                            <figure>

                                                <img class="hover-img"
                                                    src="{{ asset('images/products/') }}/{{$popular->image}}"
                                                    width="100" height="100" alt="{{$popular->name}}">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="detail/{{ $popular->id }}"
                                            class="product-name"><span>{{$popular->name}}</span></a>
                                        <div class="wrap-price"><span class="product-price">${{$popular->price}}</span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            @endforeach



                        </ul>
                    </div>
                </div>

            </div>
            <!--end sitebar-->

        </div>
        <!--end row-->

    </div>
    <!--end container-->

</main>

@push('scripts')

<script>
    var slider = document.getElementById('slider');
noUiSlider.create(slider, {
	start: [1, 1000],
	connect: true,
	range: {
		'min': 1,
		'max': 1000
	},
	pips: {
		mode: 'steps',
		stepped: true,
		density: 4
	}
});

slider.noUiSlider.on('update', function(value) {
	@this.set('min_price', value[0]);
	@this.set('max_price', value[1]);
});
</script>
@endpush
