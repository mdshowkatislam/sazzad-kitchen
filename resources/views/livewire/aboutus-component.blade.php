<main id="main ">

    <div class="container ">
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



        <section class="welcome-area section-padding2">
            <div class="container-fluid">
                <div class="row">



                    <div class="col-md-6 align-self-center">
                        <div class="welcome-img">
                            <img src="{{ asset('images/aboutus') }}/{{ $info1->image }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 align-self-center">
                        <div class="mt-5 welcome-text mt-md-0">
                            <h3><span class="style-change">{{ $info1->title1 }}</span> <br>{{ $info1->title2 }}</h3>
                            <p class="pt-3">
                                {{ $info1->doc }}



                            </p>
                            <p>
                                {{ $info1->conclusion }}
                            </p>

                        </div>
                    </div>

                </div>
            </div>
        </section>



        <section class="welcome-area section-padding2">
            <div class="container-fluid">
                <div class="row">

                    < <div class="col-md-6 align-self-center">
                        <div class="mt-5 welcome-text mt-md-0">
                            <h3><span class="style-change">{{ $info2->title1 }}</span> <br>{{ $info2->title2 }}</h3>
                            <p class="pt-3">
                                {{ $info2->doc }}



                            </p>
                            <p>
                                {{ $info2->conclusion }}
                            </p>

                        </div>
                </div>
                div class="col-md-6 align-self-center">
                <div class="welcome-img">
                    <img src="{{ asset('images/aboutus') }}/{{ $info2->image }}" class="img-fluid" alt="">
                </div>
            </div>

    </div>
    </div>
    </section>




    </div>
    </div>
