@extends('Public.layouts.context')
@section('content')

<section class="page-header">
    <div class="page-header__bg"></div>
    <!-- /.page-header__bg -->
    <div class="container">
        <ul class="villoz-breadcrumb list-unstyled">
            <li><a href="index.html">Home</a></li>
            <li><span>Villas</span></li>
        </ul><!-- /.thm-breadcrumb list-unstyled -->
        <h2 class="page-header__title">Villas Details</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->


<section class="villa-details-one">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-xl-5">
                <div class="villa-details-one__info">
                    <p class="villa-details-one__address">{{$villa->address}}</p>
                    <h3 class="villa-details-one__title">{{$villa->name}}</h3>
                    <div class="villa-details-one__price-wrap">
                        <div class="villa-details-one__price">${{$villa->price }} <span class="villa-details-one__price__shift">/ Night</span></div>
                        <div class="villa-details-one__flash">
                            <p class="wifi">🛜</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xl-7">
                <div class="villa-details-one__meta">
                    <div class="villa-details-one__meta__item">
                        <div class="villa-details-one__meta__icon"><span class="icon-bed"></span></div>
                        <h5 class="villa-details-one__meta__number">{{$villa->bed_count}}</h5>
                        <p class="villa-details-one__meta__name">Bedrooms</p>
                    </div><!-- meta-item -->
                    <div class="villa-details-one__meta__item">
                        <div class="villa-details-one__meta__icon"><span class="icon-bath"></span></div>
                        <h5 class="villa-details-one__meta__number">{{$villa->bath_count}}</h5>
                        <p class="villa-details-one__meta__name">Bathrooms</p>
                    </div><!-- meta-item -->
                    <div class="villa-details-one__meta__item">
                        <div class="villa-details-one__meta__icon"><span class="icon-guests"></span></div>
                        <h5 class="villa-details-one__meta__number">{{$villa->guest_count}}</h5>
                        <p class="villa-details-one__meta__name">Guests</p>
                    </div><!-- meta-item -->
                    <div class="villa-details-one__meta__item">
                        <div class="villa-details-one__meta__icon"><span class="icon-square-measument"></span></div>
                        <h5 class="villa-details-one__meta__number">460</h5>
                        <p class="villa-details-one__meta__name">Sqft Size</p>
                    </div><!-- meta-item -->
                </div>
            </div>
        </div>
    </div>
</section>


<section class="villa-details-three">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="villa-details-three__gallery">
                    <div class="villa-details-three__gallery__carousel villoz-owl__carousel owl-carousel owl-theme" data-owl-options='{
                "items": 1,
                "margin": 0,
                "loop": true,
                "smartSpeed": 700,
                "animateOut": "slideOutDown",
                "autoplayTimeout": 6000, 
                "nav": true,
                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-right-arrow\"></span>"],
                "dots": false,
                "autoplay": true
                }'>
                        <div class="item">
                            <div class="villa-details-three__gallery__image">
                                <img src="{{ asset($villa->image) }}" alt="villa">
                            </div>
                        </div><!-- gallery-item -->
                        <div class="item">
                            <div class="villa-details-three__gallery__image">
                                <img src="{{ asset($villa->image) }}" alt="villa">
                            </div>
                        </div><!-- gallery-item -->
                        <div class="item">
                            <div class="villa-details-three__gallery__image">
                                <img src="{{ asset($villa->image) }}" alt="villa">
                            </div>
                        </div><!-- gallery-item -->
                    </div><!-- gallery-slider -->
                    <div class="villa-details-three__gallery__btns">
                        <a class="villoz-image-popup" href="#" data-gallery-options='{
                    "items": [
                    {
                        "src": "assets/images/villa/villa-d-2-1.jpg"
                    },
                    {
                        "src": "assets/images/villa/villa-d-2-2.jpg"
                    },
                    {
                        "src": "assets/images/villa/villa-d-2-3.jpg"
                    }
                    ],
                    "gallery": {
                    "enabled": true
                    },
                    "type": "image"
                }'><span class="icon-camera"></span><span class="villa-card-two__btns__count">3</span></a>
                        <a class="video-popup" href="https://www.youtube.com/watch?v=0MuL8fd3pb8"><span class="icon-video"></span></a>
                    </div>
                </div>
                <div class="villa-details-three__content">
                    <h4 class="villa-details-three__content__title">Overview</h4>
                    <p class="villa-details-three__content__text">
                        Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        Lorem ipsum is simply free text used by copytyping refreshing.
                    </p>
                    <div class="villa-details-three__content__divider"></div>
                    <h4 class="villa-details-three__content__title">Amenities</h4>
                    <ul class="villa-details-three__lists">
                        <li><span class="fas fa-check"></span>Conditioning</li>
                        <li><span class="fas fa-check"></span>Lawn</li>
                        <li><span class="fas fa-check"></span>TV Cable</li>
                        <li><span class="fas fa-check"></span>Barbeque</li>
                        <li><span class="fas fa-check"></span>Microwave</li>
                        <li><span class="fas fa-check"></span>Washer</li>
                        <li><span class="fas fa-check"></span>Dryer</li>
                        <li><span class="fas fa-times"></span>Refrigerator</li>
                        <li><span class="fas fa-check"></span>WiFi</li>
                        <li><span class="fas fa-times"></span>Gym</li>
                        <li><span class="fas fa-times"></span>Sauna</li>
                        <li><span class="fas fa-check"></span>Window Coverings</li>
                        <li><span class="fas fa-times"></span>Laundry</li>
                        <li><span class="fas fa-check"></span>Swimming Pool</li>
                    </ul>
                    <h4 class="villa-details-three__content__title mb32">Location</h4>
                    <div class="google-map google-map__">
                        <iframe title="template google map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="map__" allowfullscreen></iframe>
                    </div>
                    <!-- /.google-map -->
                    <div class="villa-details-three__comment">
                        <h4 class="villa-details-three__comment__title">Fun Was to Discover This</h4>
                        <p class="villa-details-three__comment__text">
                            Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et
                            quasi architecto beatae vitae dicta sunt explicabo var lla sed sit amet finibus eros.
                        </p>
                    </div>
                    <h4 class="villa-details-three__content__title mb32">Write a Review</h4>
                    <form class="villa-details-three__form contact-form-validated" action="inc/sendemail.php">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="villa-details-three__form__control">
                                    <input type="text" name="name" placeholder="Your name">
                                </div><!-- /.form__control -->
                                <div class="villa-details-three__form__control">
                                    <input type="email" name="email" placeholder="Email address">
                                </div><!-- /.form__control -->
                                <div class="villa-details-three__form__control">
                                    <input type="text" name="title" placeholder="Review Title">
                                </div><!-- /.form__control -->
                            </div>
                            <div class="col-md-6">
                            </div>
                            <div class="col-md-12">
                                <div class="villa-details-three__form__control">
                                    <textarea name="message" placeholder="Write message"></textarea>
                                </div><!-- /.form__control -->
                                <button type="submit" class="villoz-btn villoz-btn--base">
                                    <i>Submit a Review</i><span>Submit a Review</span>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="result"></div><!-- /.result -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="villa-details-sidebar">
                    <div class="villa-details-sidebar__booking">
                        <h4 class="villa-details-sidebar__booking__title">Book Tours</h4>
                        <form class="villa-details-sidebar__form contact-form-validated" action="inc/sendemail.php">
                            <div class="villa-details-sidebar__control">
                                <label for="checkin">Checkin</label>
                                <input class="villoz-datepicker" id="checkin" type="text" name="checkin" placeholder="Select Date">
                            </div><!-- /.form__control -->
                            <div class="villa-details-sidebar__control">
                                <label for="checkout">Checkout</label>
                                <input class="villoz-datepicker" id="checkout" type="text" name="checkout" placeholder="Select Date">
                            </div><!-- /.form__control -->
                            <div class="villa-details-sidebar__control">
                                <label for="guests">Guests</label>
                                <select name="guests" class="selectpicker" id="guests">
                                    <option value="select">0</option>
                                    <option value="spain">1</option>
                                    <option value="africa">2</option>
                                    <option value="europe">3</option>
                                    <option value="thailand">4</option>
                                    <option value="dubai">5</option>
                                </select>
                            </div><!-- /.form__control -->
                            <div class="villa-details-sidebar__control">
                                <label for="guests">Add Extra</label>
                                <ul class="villa-details-sidebar__checkbox">
                                    <li>
                                        <input type="checkbox" name="select01" id="select01">
                                        <label for="select01">Select per Person<span>$20</span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="select02" id="select02">
                                        <label for="select02">Select per Booking<span>$20</span></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="villa-details-sidebar__total">Total<span>$160.00</span></div>
                            <button type="submit" class="villoz-btn">
                                <i>Book Now</i>
                                <span>Book Now</span>
                            </button>
                        </form>
                        <div class="result"></div><!-- /.result -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection