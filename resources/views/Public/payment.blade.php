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
                        <div class="villa-details-one__price">${{$villa->price }} <span
                                class="villa-details-one__price__shift">/ Night</span></div>
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
                    <div class="villa-details-three__gallery__carousel villoz-owl__carousel owl-carousel owl-theme"
                        data-owl-options='{
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

                    <div class="villa-details-three__content">
                        <h4 class="villa-details-three__content__title">Overview</h4>
                        <p class="villa-details-three__content__text">
                            {{ $villainfo->overview }}
                        </p>
                        <div class="villa-details-three__content__divider"></div>
                        <h4 class="villa-details-three__content__title">Amenities</h4>
                        @php
                        $villaAmenities = explode(',', $villainfo->amenities ?? []);
                        @endphp

                        <div class="d-flex flex-wrap gap-2">
                            @foreach($villaAmenities as $amenity)
                            <span class="badge bg-success">{{ trim($amenity) }}</span>
                            @endforeach
                        </div>

                        <h4 class="villa-details-three__content__title mb32">Location</h4>
                        <div class="google-map google-map__">
                            <iframe title="template google map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                                class="map__" allowfullscreen></iframe>
                        </div>
                        <!-- /.google-map -->
                        <div class="villa-details-three__comment">
                            <h4 class="villa-details-three__comment__title">Fun Was to Discover This</h4>
                            <p class="villa-details-three__comment__text">
                                {{$villainfo->fun_discovery}}
                            </p>
                        </div>

                        <!-- Booking Section - Right Side -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="shadow rounded p-4 mb-4">
                                    <div class="booking-sidebar">
                                        <h4 class="text-xl font-bold mb-4">Book Tours</h4>
                                        <form class="needs-validation" method="POST" action="{{ route('storevalues') }}"
                                            novalidate>
                                            @csrf
                                            <div class="mb-3">
                                                <label for="checkin" class="form-label">Check-in</label>
                                                <input class="form-control" id="checkin" type="date" name="checkin"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="checkout" class="form-label">Check-out</label>
                                                <input class="form-control" id="checkout" type="date" name="checkout"
                                                    required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input id="email" class="form-control" type="email" name="email"
                                                    placeholder="Enter your email" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="extra_guests" class="form-label">Extra Guests</label>
                                                <select name="extra_guests" class="form-select" id="extra_guests">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Add Extra</label>
                                                <ul class="list-unstyled">
                                                    <li class="d-flex justify-content-between p-2 bg-light rounded">
                                                        <span>Per Person</span>
                                                        <span>$20</span>
                                                    </li>
                                                </ul>
                                            </div>

                                            <!-- Hidden input to store total price -->
                                            <input type="hidden" name="total_price" id="total_price_input"
                                                value="{{ $villa->price }}">

                                            <!-- Total Price Section -->
                                            <div
                                                class="d-flex justify-content-between py-2 border-top border-bottom mb-3">
                                                <span class="fw-bold">Total:</span>
                                                <span class="fw-bold text-primary" id="totalPrice">${{ $villa->price
                                                    }}</span>
                                            </div>

                                            <button type="submit" class="btn btn-primary w-100">
                                                <i class="bi bi-calendar-check me-2"></i>Book Now
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- JavaScript for Dynamic Price Calculation -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                            document.getElementById('extra_guests').addEventListener('change', function() {
                            let extraGuests = parseInt(this.value);
                            let basePrice = parseFloat("{{ $villa->price }}");
                            let totalPrice = basePrice + (extraGuests * 20);
                            
                            document.getElementById('totalPrice').textContent = '$' + totalPrice.toFixed(2);
                            document.getElementById('total_price_input').value = totalPrice;
                        });
                    });
                        </script>

                    </div>
                </div>
</section>

@endsection