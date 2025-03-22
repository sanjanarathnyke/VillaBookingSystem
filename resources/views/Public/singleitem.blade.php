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

@if(isset($country))
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
                        <li><span>Area (km2)</span>{{$country->area}} km2</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@else
<p>Country details not available.</p>
@endif


{{--this section is for display the villas in their perticuler countries--}}
{{-- <section class="villa-two">
    <div class="sec-title text-center">
        <h6 class="sec-title__tagline">our villas for rent</h6>
        <h3 class="sec-title__title">See Villas You’ll Love to<br> Book for Vacations</h3>
    </div>
    <div class="container">
        <div class="row">
            @foreach($villas as $villa)
            <div class="col-md-4">
                <div class="villa-card">
                    <img src="{{ asset($villa->image) }}" alt="{{ $villa->name }}" class="img-fluid">
                    <h4>{{ $villa->name }}</h4>
                    <p>{{ $villa->description_about }}</p>
                    <p><strong>Price:</strong> ${{ $villa->price }}</p>
                    <a href="{{ route('payment', $villa->id) }}" class="btn btn-primary">Proceed to Payment</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}

<section class="villa-one villa-one--destination">
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">our villas for rent</h6>
            <h3 class="sec-title__title">Explore Villas Available<br> for the Rent</h3>
        </div>
        <div class="villa-one__carousel villoz-owl__carousel villoz-owl__carousel--with-shadow villoz-owl__carousel--basic-nav owl-carousel owl-theme"
            data-owl-options='{
            "items": 1,
            "margin": 30,
            "loop": false,
            "smartSpeed": 700,
            "nav": false,
            "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
            "dots": true,
            "autoplay": false,
            "responsive": {
                "0": {
                    "items": 1
                },
                "768": {
                    "items": 2
                },
                "992": {
                    "items": 3
                }
            }
        }'>
            @foreach($villas as $villa)
            <div class="item">
                <div class="villa-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="villa-card__image">
                        <img src="{{ asset($villa->image) }}" alt="{{ $villa->name }}">
                        <div class="villa-card__flash">
                            <!-- Optionally add flash labels here -->
                        </div>
                        <div class="villa-card__btns">
                            <a class="villoz-image-popup" href="#" data-gallery-options='{
                                    "items": [
                                        {
                                            "src": "{{ asset($villa->image) }}"
                                        }
                                    ],
                                    "gallery": {
                                        "enabled": true
                                    },
                                    "type": "image"
                                }'><span class="icon-camera"></span><span class="villa-card__btns__count">1</span></a>
                        </div>
                    </div>
                    <div class="villa-card__content">
                        <p class="villa-card__address">{{ $villa->description_about }}</p>
                        <h3 class="villa-card__title"><a href="{{ route('payment', $villa->id) }}">{{ $villa->name
                                }}</a></h3>
                        <div class="villa-card__price">${{ $villa->price }} <span class="villa-card__price__shift">/
                                Night</span></div>
                        <ul class="list-unstyled villa-card__meta">
                            <li><span class="icon-bed"></span>{{$villa->bed_count}} beds</li>
                            <li><span class="icon-bath"></span>{{$villa->bath_count}} baths</li>
                            <li><span class="icon-users"></span>{{$villa->guest_count}} guests</li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection