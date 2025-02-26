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
                    <img src="assets/images/villa/countries/thailand.png" alt="villoz">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="destinations-details__content">
                    <h3 class="destinations-details__title">Thailand</h3>
                    <h5 class="destinations-details__heading">Thailand is a Southeast Asian country. It's known for tropical beaches, opulent royal palaces.</h5>
                    <p class="destinations-details__text">
                        Lorem ipsum dolor sit amet, con adipiscing elit tiam convallis elit id impedie. Quisq commodo simply free ornare tortor.
                        If you are going to use a passage of the middle of text.
                    </p>
                    <ul class="destinations-details__list">
                        <li><span>Country</span>Thailand</li>
                        <li><span>Languages Spoken</span>English, Thai</li>
                        <li><span>Capital</span>Bangkok</li>
                        <li><span>Currency</span>Thai Baht</li>
                        <li><span>Visa Requirements</span>Documents Requied</li>
                        <li><span>Area (km2)</span>96.000 km2</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="villa-one villa-one--destination">
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">our villas for rent</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">Explore Villas Available<br> for the Rent</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="villa-one__carousel villoz-owl__carousel villoz-owl__carousel--with-shadow villoz-owl__carousel--basic-nav owl-carousel owl-theme" data-owl-options='{
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
            <div class="item">
                <div class="villa-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="villa-card__image">
                        <img src="assets/images/villa/thailand/4.png" alt="villoz">
                        <div class="villa-card__flash">
                            <p class="villa-card__flash__label feature">Featured</p>
                        </div><!-- /.villa-card__label -->
                    </div><!-- /.villa-card__image -->
                    <div class="villa-card__content">
                        <div class="villa-card__ratings">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <p class="villa-card__address">Disle-Sur-Mer, Southwest, France</p>
                        <h3 class="villa-card__title"><a href="villa-details.html">The Lake House</a></h3><!-- /.villa-card__title -->
                        <div class="villa-card__price">$160 <span class="villa-card__price__shift">/ Night</span></div>
                        <ul class="list-unstyled villa-card__meta">
                            <li><span class="icon-bed"></span>3 beds</li>
                            <li><span class="icon-bath"></span>2 baths</li>
                            <li><span class="icon-users"></span>12 guests</li>
                        </ul><!-- /.list-unstyled villa-card__meta -->
                    </div><!-- /.villa-card__content -->
                </div><!-- /.villa-card -->
            </div><!-- /.item -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.villa-one -->

@endsection