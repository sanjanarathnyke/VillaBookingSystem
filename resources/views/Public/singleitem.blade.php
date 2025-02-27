@extends('Public.layouts.context')
@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="villoz-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Destinations</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Destinations Details</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="destinations-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="destinations-details__image">
                    <img src="{{ asset($country->image) }}" alt="villoz">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="destinations-details__content">
                    <h3 class="destinations-details__title">{{$country->name}}</h3>
                    <h5 class="destinations-details__heading">{{$country->description}}</h5>
                    <ul class="destinations-details__list">
                        <li><span>Country</span>{{$country->name}}</li>
                        <li><span>Languages Spoken</span>{{$country->language_spoke}}</li>
                        <li><span>Capital</span>{{$country->capital}}</li>
                        <li><span>Currency</span>{{$country->currency}}</li>
                        <li><span>Visa Requirements</span>{{$country->visa_requirements}}</li>
                        <li><span>Area (km2)</span>{{$country->area}}km2</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="villa-two">
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">our villas for rent</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">See Villas You’ll Love to<br> Book for Vacations</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="villa-two__carousel villoz-owl__carousel villoz-owl__carousel--with-shadow villoz-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
            "items": 1,
            "margin": 30,
            "loop": false,
            "smartSpeed": 700,
            "nav": false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "dots": false,
            "autoplay": true,
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2
                },
                "1024": {
                    "items": 3
                },
                "1400": {
                    "items": 4
                }
            }
        }'>
            @foreach($villas as $villa)
            <div class="item">
                <div class="villa-card-two wow fadeInUp" data-wow-delay="100ms">
                    <div class="villa-card-two__image">
                        <img src="{{ asset($villa->image) }}" alt="villoz">
                        <div class="villa-card-two__content">
                            <div class="villa-card-two__btns">
                                <a class="villoz-image-popup" href="#" data-gallery-options='{
                                    "items": [
                                        {
                                            "src": "{{ asset($villa->image) }}"
                                        },
                                        {
                                            "src": "assets/images/villa/villa-2-2.jpg"
                                        },
                                        {
                                            "src": "assets/images/villa/villa-2-3.jpg"
                                        }
                                    ],
                                    "gallery": {
                                        "enabled": true
                                    },
                                    "type": "image"
                                }'><span class="icon-camera"></span><span class="villa-card-two__btns__count">3</span></a>
                            </div>
                            <div class="villa-card-two__ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p class="villa-card-two__address">{{ $villa->address }}</p>
                            <h3 class="villa-card-two__title"><a href="{{ route('villas') }}">{{ $villa->name }}</a></h3><!-- /.villa-card-two__title -->
                            <div class="villa-card-two__price">${{ $villa->price }} <span class="villa-card-two__price__shift">/ Night</span></div>
                        </div><!-- /.villa-card-two__content -->
                    </div><!-- /.villa-card-two__image -->
                    <ul class="list-unstyled villa-card-two__meta">
                        <li><span class="icon-bed"></span>{{ $villa->bed_count }} beds</li>
                        <li><span class="icon-bath"></span>{{ $villa->bath_count }} baths</li>
                        <li><span class="icon-users"></span>{{ $villa->guest_count }} guests</li>
                    </ul><!-- /.list-unstyled villa-card-two__meta -->
                </div><!-- /.villa-card-two -->
            </div><!-- /.item -->
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.villa-two -->

@endsection