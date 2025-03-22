@extends('Public.layouts.context')
@section('content')

<!-- main-slider-start -->
<section class="banner-two">
    <div class="banner-two__carousel villoz-owl__carousel owl-carousel owl-theme" data-owl-options='{
		"items": 1,
		"margin": 0,
		"loop": true,
		"smartSpeed": 700,
		"animateOut": "fadeOut",
		"autoplayTimeout": 5000, 
		"nav": true,
		"navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
		"dots": false,
		"autoplay": true
		}'>
        <div class="item">
            <div class="banner-two__image" style="background-image: url(assets/images/backgrounds/slider-2-1.jpg);">
            </div>
        </div>
        <div class="item">
            <div class="banner-two__image" style="background-image: url(assets/images/backgrounds/slider-2-2.jpg);">
            </div>
        </div>
        <div class="item">
            <div class="banner-two__image" style="background-image: url(assets/images/backgrounds/slider-2-3.jpg);">
            </div>
        </div>
    </div><!-- banner slider -->
    <div class="banner-two__content">
        <div class="container">
            <div class="banner-two__content__top wow fadeInUp" data-wow-delay="300ms">
                <h2 class="banner-two__title">
                    <span style="background-image: url(assets/images/shapes/title-bg-shape.png);"
                        class="banner-two__title__sub"><span>Happiness Guaranteed</span></span>
                    Let’s Make your stay<br> unforgettable
                </h2>
                <p class="banner-two__text">Checkout Beautiful Places Arround the World.</p>
            </div>
        </div>
    </div>
</section>
<!-- main-slider-end -->
<section class="feature-two" style="background-image: url(assets/images/shapes/feature-two-bg.jpg);">
    <div class="container">
        <div class="row gutter-y-30">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="feature-two__item">
                    <div class="feature-two__item__icon"><span class="icon-cashback"></span></div>
                    <h3 class="feature-two__item__title">Best Price Guarantee</h3>
                    <p class="feature-two__item__text">There are many variations of majority have simply free text.</p>
                </div><!-- feature-item -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="feature-two__item">
                    <div class="feature-two__item__icon"><span class="icon-booking"></span></div>
                    <h3 class="feature-two__item__title">Easy & Quick Booking</h3>
                    <p class="feature-two__item__text">There are many variations of majority have simply free text.</p>
                </div><!-- feature-item -->
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="feature-two__item">
                    <div class="feature-two__item__icon"><span class="icon-house"></span></div>
                    <h3 class="feature-two__item__title">Best Villas Selection</h3>
                    <p class="feature-two__item__text">There are many variations of majority have simply free text.</p>
                </div><!-- feature-item -->
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.feature-two -->
<section class="destination-two">
    <div class="container">
        <div class="sec-title text-center">

            <h6 class="sec-title__tagline">Discover villas</h6><!-- /.sec-title__tagline -->

            <h3 class="sec-title__title">Exotic Destinations</h3><!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="destination-two__item">
                    <img src="assets/images/destination/destination-2-1.jpg" alt="villoz">
                    <span class="destination-two__item__name">Spain</span>
                </div>
            </div>
            <div class="col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="destination-two__item">
                    <img src="assets/images/destination/destination-2-2.jpg" alt="villoz">
                    <span class="destination-two__item__sub-name">Wildlife</span>
                    <span class="destination-two__item__name">Thailand</span>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="destination-two__item">
                    <img src="assets/images/destination/destination-2-3.jpg" alt="villoz">
                    <span class="destination-two__item__name">Africa</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="destination-two__item">
                    <img src="assets/images/destination/destination-2-4.jpg" alt="villoz">
                    <span class="destination-two__item__name">Australia</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <div class="destination-two__item">
                    <img src="assets/images/destination/destination-2-5.jpg" alt="villoz">
                    <span class="destination-two__item__sub-name">Adventure</span>
                    <span class="destination-two__item__name">Switzerland</span>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.destination-two -->
<section class="tab-two" style="background-image: url(assets/images/backgrounds/tab-bg-2.jpg);">
    <div class="container tabs-box">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <div class="sec-title text-left">
                    <h6 class="sec-title__tagline">Enjoy villas</h6><!-- /.sec-title__tagline -->
                    <h3 class="sec-title__title">See Villas Highlights</h3><!-- /.sec-title__title -->
                </div><!-- /.sec-title -->
                <!-- section-title -->
            </div>
            <div class="col-lg-5 col-md-6">
                <p class="tab-two__text">
                    Powerful corporate social responsibility, grantmaking, and employee engagement strategies.
                    Our impact is about more than moving money to where it’s needed most.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4">
                <ul class="list-unstyled tab-buttons tab-two__list">
                    <li data-tab="#well_curated_experience" class="tab-btn active-btn">Well Curated Experience</li>
                    <li data-tab="#unforgetable_events" class="tab-btn">Unforgetable Events</li>
                    <li data-tab="#daily_housekeeping" class="tab-btn">Daily Housekeeping</li>
                    <li data-tab="#concierge_services" class="tab-btn">Concierge Services</li>
                    <li data-tab="#dine_drinks" class="tab-btn">Dine & Drinks</li>
                </ul><!-- /.list-unstyledf -->
            </div>
            <div class="col-xl-8">
                <div class="tabs-content">
                    <div class="tab fadeInUp animated active-tab" id="well_curated_experience">
                        <div class="tab-two__content">
                            <div class="villoz-stretch-element-inside-column">
                                <div class="tab-two__content__img"><img src="assets/images/resources/tab-2-1.jpg"
                                        alt="villoz"></div>
                            </div>
                            <div class="tab-two__content__info">
                                <div class="tab-two__content__info__top"
                                    style="background-image: url(assets/images/shapes/tab-info-bg-2.png);">
                                    <h4 class="tab-two__content__info__title">Well Curated Experience</h4>
                                    <p class="tab-two__content__info__text">
                                        Powerful corporate social responsibility and employee engagement strategies.
                                        Impact is about more than moving.
                                    </p>
                                </div>
                                Read More<span class="icon-right-arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="unforgetable_events">
                        <div class="tab-two__content">
                            <div class="villoz-stretch-element-inside-column">
                                <div class="tab-two__content__img"><img src="assets/images/resources/tab-2-2.jpg"
                                        alt="villoz"></div>
                            </div>
                            <div class="tab-two__content__info">
                                <div class="tab-two__content__info__top"
                                    style="background-image: url(assets/images/shapes/tab-info-bg-2.png);">
                                    <h4 class="tab-two__content__info__title">Unforgetable Events</h4>
                                    <p class="tab-two__content__info__text">
                                        Powerful corporate social responsibility and employee engagement strategies.
                                        Impact is about more than moving.
                                    </p>
                                </div>
                                Read More<span class="icon-right-arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="daily_housekeeping">
                        <div class="tab-two__content">
                            <div class="villoz-stretch-element-inside-column">
                                <div class="tab-two__content__img"><img src="assets/images/resources/tab-2-3.jpg"
                                        alt="villoz"></div>
                            </div>
                            <div class="tab-two__content__info">
                                <div class="tab-two__content__info__top"
                                    style="background-image: url(assets/images/shapes/tab-info-bg-2.png);">
                                    <h4 class="tab-two__content__info__title">Daily Housekeeping</h4>
                                    <p class="tab-two__content__info__text">
                                        Powerful corporate social responsibility and employee engagement strategies.
                                        Impact is about more than moving.
                                    </p>
                                </div>
                                Read More<span class="icon-right-arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="concierge_services">
                        <div class="tab-two__content">
                            <div class="villoz-stretch-element-inside-column">
                                <div class="tab-two__content__img"><img src="assets/images/resources/tab-2-4.jpg"
                                        alt="villoz"></div>
                            </div>
                            <div class="tab-two__content__info">
                                <div class="tab-two__content__info__top"
                                    style="background-image: url(assets/images/shapes/tab-info-bg-2.png);">
                                    <h4 class="tab-two__content__info__title">Concierge Services</h4>
                                    <p class="tab-two__content__info__text">
                                        Powerful corporate social responsibility and employee engagement strategies.
                                        Impact is about more than moving.
                                    </p>
                                </div>
                                Read More<span class="icon-right-arrow"></span>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="dine_drinks">
                        <div class="tab-two__content">
                            <div class="villoz-stretch-element-inside-column">
                                <div class="tab-two__content__img"><img src="assets/images/resources/tab-2-5.jpg"
                                        alt="villoz"></div>
                            </div>
                            <div class="tab-two__content__info">
                                <div class="tab-two__content__info__top"
                                    style="background-image: url(assets/images/shapes/tab-info-bg-2.png);">
                                    <h4 class="tab-two__content__info__title">Dine & Drinks</h4>
                                    <p class="tab-two__content__info__text">
                                        Powerful corporate social responsibility and employee engagement strategies.
                                        Impact is about more than moving.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- tab-two -->
<section class="villa-two">
    <div class="container">
        <div class="sec-title text-center">
            <h6 class="sec-title__tagline">Plan Your Dream Getaway</h6><!-- /.sec-title__tagline -->
            <h3 class="sec-title__title">Discover the Joy of Travel<br> and Create Lasting Memories</h3>
            <!-- /.sec-title__title -->
        </div><!-- /.sec-title -->
        <div class="villa-two__carousel villoz-owl__carousel villoz-owl__carousel--with-shadow villoz-owl__carousel--basic-nav owl-carousel owl-theme"
            data-owl-options='{
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
            <!-- Texture Card 1 -->
            <div class="item">
                <div class="texture-card wow fadeInUp" data-wow-delay="100ms"
                    style="background: repeating-linear-gradient(45deg, #f0f0f0, #f0f0f0 10px, #e0e0e0 10px, #e0e0e0 20px);">
                    <div class="texture-card__content">
                        <p class="texture-card__label">Featured Destination</p>
                        <p class="texture-card__address">A Journey to Serenity</p>
                        <h3 class="texture-card__title">Escape the Ordinary</h3>
                        <div class="texture-card__price">Relaxation Awaits</div>
                    </div>
                </div>
            </div>
            <!-- Texture Card 2 -->
            <div class="item">
                <div class="texture-card wow fadeInUp" data-wow-delay="200ms"
                    style="background: radial-gradient(circle, #dfeeff, #ffffff);">
                    <div class="texture-card__content">
                        <p class="texture-card__label">Special Offer</p>
                        <p class="texture-card__address">Unwind in Paradise</p>
                        <h3 class="texture-card__title">Your Perfect Retreat</h3>
                        <div class="texture-card__price">Adventure at Your Fingertips</div>
                    </div>
                </div>
            </div>
            <!-- Texture Card 3 -->
            <div class="item">
                <div class="texture-card wow fadeInUp" data-wow-delay="300ms"
                    style="background: linear-gradient(135deg, #fff8dc, #ffebcd);">
                    <div class="texture-card__content">
                        <p class="texture-card__label">Top Rated</p>
                        <p class="texture-card__address">Explore New Horizons</p>
                        <h3 class="texture-card__title">Rediscover Yourself</h3>
                        <div class="texture-card__price">Create Lifelong Memories</div>
                    </div>
                </div>
            </div>
            <!-- Texture Card 4 -->
            <div class="item">
                <div class="texture-card wow fadeInUp" data-wow-delay="400ms"
                    style="background: repeating-linear-gradient(90deg, #e6ffe6, #e6ffe6 15px, #ccffcc 15px, #ccffcc 30px);">
                    <div class="texture-card__content">
                        <p class="texture-card__label">Exclusive Experience</p>
                        <p class="texture-card__address">Find Your Happy Place</p>
                        <h3 class="texture-card__title">Live the Adventure</h3>
                        <div class="texture-card__price">Where Dreams Come True</div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.villa-two -->
<section class="fact-one" style="background-image: url(assets/images/backgrounds/funfact-bg-1.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <div class="fact-one__item text-center"
                    style="background-image: url(assets/images/shapes/funfact-border.png);">
                    <div class="fact-one__item__icon"><span class="icon-house"></span></div><!-- /.fact-one__icon -->
                    <div class="fact-one__item__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="920" data-speed="1500"></span>
                        </span>
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__item__title">Luxury Villas</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <div class="fact-one__item text-center"
                    style="background-image: url(assets/images/shapes/funfact-border.png);">
                    <div class="fact-one__item__icon"><span class="icon-recommend"></span></div>
                    <!-- /.fact-one__icon -->
                    <div class="fact-one__item__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="28" data-speed="1500"></span>K
                        </span>
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__item__title">Five Star Rating</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <div class="fact-one__item text-center"
                    style="background-image: url(assets/images/shapes/funfact-border.png);">
                    <div class="fact-one__item__icon"><span class="icon-refugee"></span></div><!-- /.fact-one__icon -->
                    <div class="fact-one__item__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="80" data-speed="1500"></span>K
                        </span>
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__item__title">International Guests</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="fact-one__item text-center"
                    style="background-image: url(assets/images/shapes/funfact-border.png);">
                    <div class="fact-one__item__icon"><span class="icon-hot-coffee"></span></div>
                    <!-- /.fact-one__icon -->
                    <div class="fact-one__item__count">
                        <span class="count-box">
                            <span class="count-text" data-stop="990" data-speed="1500"></span>
                        </span>
                    </div><!-- /.fact-one__count -->
                    <h3 class="fact-one__item__title">Breakfast Served</h3><!-- /.fact-one__title -->
                </div><!-- /.fact-one__item -->
            </div><!-- /.col-lg-3 col-md-6 -->
        </div>
        <div class="fact-one__bottom">
            <div class="fact-one__bottom__bg"
                style="background-image: url(assets/images/backgrounds/funfact-bg-1-bottom.jpg);"></div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="fact-one__bottom__image"><img src="assets/images/resources/funfact-1-1.jpg"
                            alt="villoz"></div>
                </div>
                <div class="col-lg-6">
                    <div class="fact-one__bottom__content">
                        <h3 class="fact-one__bottom__title">See Premium Choice<br> for Vacation<br> Rentals</h3>
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-6">
                                <p class="fact-one__bottom__text">
                                    There are many variations of passages of ipsum available, but the majority have
                                    suffered in some form, by injected humour words.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="tab-one">
    <div class="container">
        <div class="row tabs-box">
            <div class="col-xl-6">
                <div class="tab-one__left">
                    <div class="sec-title text-left">

                        <h6 class="sec-title__tagline">other features</h6><!-- /.sec-title__tagline -->

                        <h3 class="sec-title__title">We’re Providing Villas Services & Amenities for You</h3>
                        <!-- /.sec-title__title -->
                    </div><!-- /.sec-title -->
                    <!-- section-title -->
                    <ul class="list-unstyled tab-buttons tab-one__list">
                        <li data-tab="#housekeeping" class="tab-btn">House Keeping<span
                                class="fas fa-arrow-right"></span></li>
                        <li data-tab="#quality_food" class="tab-btn active-btn">Quality Food<span
                                class="fas fa-arrow-right"></span></li>
                        <li data-tab="#massages" class="tab-btn">Best Massages<span class="fas fa-arrow-right"></span>
                        </li>
                        <li data-tab="#events" class="tab-btn">Events<span class="fas fa-arrow-right"></span></li>
                    </ul><!-- /.list-unstyledf -->
                </div>
            </div>
            <div class="col-xl-6">
                <div class="tabs-content">
                    <div class="tab fadeInUp animated" id="housekeeping">
                        <div class="tab-one__content">
                            <div class="tab-one__content__map"><img src="assets/images/resources/about-1-map.png"
                                    alt="villoz"></div>
                            <div class="tab-one__content__img"><img src="assets/images/resources/tab-1.jpg"
                                    alt="villoz"></div>
                            <div class="tab-one__content__info"
                                style="background-image: url(assets/images/resources/tab-info-bg.jpg);">
                                <h4 class="tab-one__content__info__title">House Keeping</h4>
                                <p class="tab-one__content__info__text">
                                    The unthinkable today becomes inevitable. Lorem ipsum dolor sit do amet, simply free
                                    text consectetur adipiscing.
                                </p>
                                <a class="tab-one__content__info__rm" href="about.html"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab active-tab fadeInUp animated" id="quality_food">
                        <div class="tab-one__content">
                            <div class="tab-one__content__map"><img src="assets/images/resources/about-1-map.png"
                                    alt="villoz"></div>
                            <div class="tab-one__content__img"><img src="assets/images/resources/tab-2.jpg"
                                    alt="villoz"></div>
                            <div class="tab-one__content__info"
                                style="background-image: url(assets/images/resources/tab-info-bg.jpg);">
                                <h4 class="tab-one__content__info__title">Quality Food</h4>
                                <p class="tab-one__content__info__text">
                                    The unthinkable today becomes inevitable. Lorem ipsum dolor sit do amet, simply free
                                    text consectetur adipiscing.
                                </p>
                                <a class="tab-one__content__info__rm" href="about.html"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="massages">
                        <div class="tab-one__content">
                            <div class="tab-one__content__map"><img src="assets/images/resources/about-1-map.png"
                                    alt="villoz"></div>
                            <div class="tab-one__content__img"><img src="assets/images/resources/tab-3.jpg"
                                    alt="villoz"></div>
                            <div class="tab-one__content__info"
                                style="background-image: url(assets/images/resources/tab-info-bg.jpg);">
                                <h4 class="tab-one__content__info__title">Best Massages</h4>
                                <p class="tab-one__content__info__text">
                                    The unthinkable today becomes inevitable. Lorem ipsum dolor sit do amet, simply free
                                    text consectetur adipiscing.
                                </p>
                                <a class="tab-one__content__info__rm" href="about.html"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="tab fadeInUp animated" id="events">
                        <div class="tab-one__content">
                            <div class="tab-one__content__map"><img src="assets/images/resources/about-1-map.png"
                                    alt="villoz"></div>
                            <div class="tab-one__content__img"><img src="assets/images/resources/tab-4.jpg"
                                    alt="villoz"></div>
                            <div class="tab-one__content__info"
                                style="background-image: url(assets/images/resources/tab-info-bg.jpg);">
                                <h4 class="tab-one__content__info__title">Events</h4>
                                <p class="tab-one__content__info__text">
                                    The unthinkable today becomes inevitable. Lorem ipsum dolor sit do amet, simply free
                                    text consectetur adipiscing.
                                </p>
                                <a class="tab-one__content__info__rm" href="about.html"><span
                                        class="icon-right-arrow"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- tab-one -->
<section class="gallery-two">
    <div class="container">
        <div class="gallery-two__carousel villoz-owl__carousel  villoz-owl__carousel--basic-nav owl-carousel owl-theme"
            data-owl-options='{
			"items": 6,
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
				"360": {
					"items": 2,
					"margin": 20
				},
				"575": {
					"items": 3
				},
				"992": {
					"items": 4
				},
				"1200": {
					"items": 5
				},
				"1365": {
					"items": 6
				}
			}
			}'>
            <div class="item">
                <div class="gallery-two__card">
                    <img src="assets/images/gallery/gallery-2-1.jpg" alt="">
                    <div class="gallery-two__card__hover">
                        <a href="assets/images/gallery/gallery-2-1.jpg" class="img-popup">
                            <span class="gallery-two__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-two__card__hover -->
                </div><!-- /.gallery-two__card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="item">
                <div class="gallery-two__card">
                    <img src="assets/images/gallery/gallery-2-2.jpg" alt="">
                    <div class="gallery-two__card__hover">
                        <a href="assets/images/gallery/gallery-2-2.jpg" class="img-popup">
                            <span class="gallery-two__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-two__card__hover -->
                </div><!-- /.gallery-two__card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="item">
                <div class="gallery-two__card">
                    <img src="assets/images/gallery/gallery-2-3.jpg" alt="">
                    <div class="gallery-two__card__hover">
                        <a href="assets/images/gallery/gallery-2-3.jpg" class="img-popup">
                            <span class="gallery-two__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-two__card__hover -->
                </div><!-- /.gallery-two__card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="item">
                <div class="gallery-two__card">
                    <img src="assets/images/gallery/gallery-2-4.jpg" alt="">
                    <div class="gallery-two__card__hover">
                        <a href="assets/images/gallery/gallery-2-4.jpg" class="img-popup">
                            <span class="gallery-two__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-two__card__hover -->
                </div><!-- /.gallery-two__card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="item">
                <div class="gallery-two__card">
                    <img src="assets/images/gallery/gallery-2-5.jpg" alt="">
                    <div class="gallery-two__card__hover">
                        <a href="assets/images/gallery/gallery-2-5.jpg" class="img-popup">
                            <span class="gallery-two__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-two__card__hover -->
                </div><!-- /.gallery-two__card -->
            </div><!-- /.col-md-6 col-lg-4 -->
            <div class="item">
                <div class="gallery-two__card">
                    <img src="assets/images/gallery/gallery-2-6.jpg" alt="">
                    <div class="gallery-two__card__hover">
                        <a href="assets/images/gallery/gallery-2-6.jpg" class="img-popup">
                            <span class="gallery-two__card__icon"></span>
                        </a>
                    </div><!-- /.gallery-two__card__hover -->
                </div><!-- /.gallery-two__card -->
            </div><!-- /.col-md-6 col-lg-4 -->
        </div><!-- /.gallery-two__carousel -->
    </div><!-- /.container -->
</section><!-- /.gallery-two -->
<section class="cta-two">
    <div class="container">
        <div class="blog-one__carousel villoz-owl__carousel villoz-owl__carousel--with-shadow villoz-owl__carousel--basic-nav owl-carousel owl-theme"
            data-owl-options='{
			"items": 1,
			"margin": 0,
			"loop": true,
			"smartSpeed": 700,
			"nav": false,
			"navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
			"dots": false,
			"autoplay": true
		    }'>
            <h3 class="cta-two__title">Experience the Ultimate Retreat: Privacy, Comfort, and Hotel-Style Luxury</h3>
            <h3 class="cta-two__title">Your Perfect Escape: A Home Away from Home with World-Class Amenities</h3>
        </div>
    </div><!-- /.container -->
</section><!-- /.cta-one -->
@endsection