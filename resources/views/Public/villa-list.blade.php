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
        <h2 class="page-header__title">Villas List</h2>
    </div><!-- /.container -->
    <div class="banner-form__position wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <form class="banner-form__wrapper wow fadeInUp" action="villa-grid-1-right.html" data-wow-delay="200ms">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="banner-form__control">
                            <label for="location">Location</label>
                            <select name="location" class="selectpicker" id="location">
                                <option value="select">Where to Next?</option>
                                <option value="spain">Spain</option>
                                <option value="africa">Africa</option>
                                <option value="europe">Europe</option>
                                <option value="thailand">Thailand</option>
                                <option value="dubai">Dubai</option>
                                <option value="australia">Australia</option>
                                <option value="swizerlan">Swizerlan</option>
                            </select>
                            <i class="icon-place"></i>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="banner-form__control">
                            <label for="checkin">Checkin</label>
                            <input class="villoz-datepicker" id="checkin" type="text" name="checkin" placeholder="Add Date">
                            <i class="icon-calendar"></i>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="banner-form__control">
                            <label for="checkout">Checkout</label>
                            <input class="villoz-datepicker" id="checkout" type="text" name="checkout" placeholder="Add Date">
                            <i class="icon-calendar"></i>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="banner-form__control">
                            <label for="guests">Guests</label>
                            <button type="submit" class="banner-form__qty-minus sub">
                                <i class="icon-minus-1"></i>
                            </button>
                            <input id="guests" type="number" value="0" name="guests" placeholder="0">
                            <button type="submit" class="banner-form__qty-plus add">
                                <i class="icon-plus-1"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <button type="submit" aria-label="search submit" class="villoz-btn villoz-btn--base">
                            <i><i class="icon-magnifying-glass"></i></i>
                            <span><i class="icon-magnifying-glass"></i></span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section><!-- /.page-header -->

<section class="villa-page">
    <div class="container tabs-box">
        <div class="villa-page__info-top">
            <div class="villa-page__showing-text">Showing 1–1 of 1 Result</div><!-- villa-show-item -->
            <ul class="villa-page__nav tab-buttons list-unstyled">
                <li data-tab="#list" class="tab-btn active-btn"><span class="icon-list"></span></li>
                <li data-tab="#grid" class="tab-btn"><span class="icon-grid"></span></li>
            </ul><!-- villa-tab -->
            <div class="villa-page__showing-sort">
                <select class="selectpicker" aria-label="Sort by ratings">
                    <option selected>Sort by ratings</option>
                    <option value="1">Sort by popular</option>
                    <option value="2">Sort by price</option>
                </select>
            </div><!-- villa-sorting -->
        </div>
        <div class="tabs-content">
            <!-- List View -->
            <div class="tab active-tab" id="list">
                <div class="row gutter-y-30">
                    <div class="col-lg-12">
                        <div class="villa-card-list villa-card-list--full-width wow fadeInUp" data-wow-delay="100ms">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-5">
                                    <div class="villa-card-list__image">
                                        <img src="assets/images/villa/villa-list-1-big.jpg" alt="villoz">
                                        <a href="javascript:void(0)" class="villa-card-list__like"><span class="fas fa-heart"></span></a>
                                        <div class="villa-card-list__flash">
                                            <p class="villa-card-list__flash__label feature">Featured</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="villa-card-list__content">
                                        <div class="villa-card-list__ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="villa-card-list__address">Disle-Sur-Mer, Southwest, France</p>
                                        <h3 class="villa-card-list__title"><a href="villa-details.html">The Lake House</a></h3>
                                        <div class="villa-card-list__price">$160 <span class="villa-card-list__price__shift">/ Night</span></div>
                                        <ul class="list-unstyled villa-card-list__meta">
                                            <li><span class="icon-bed"></span>3 beds</li>
                                            <li><span class="icon-bath"></span>2 baths</li>
                                            <li><span class="icon-users"></span>12 guests</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Grid View -->
            <div class="tab" id="grid">
                <div class="row gutter-y-30">
                    <div class="col-lg-4 col-md-6">
                        <div class="villa-card wow fadeInUp" data-wow-delay="100ms">
                            <div class="villa-card__image">
                                <img src="assets/images/villa/villa-1-1.jpg" alt="villoz">
                                <a href="javascript:void(0)" class="villa-card__like"><span class="fas fa-heart"></span></a>
                                <div class="villa-card__flash">
                                    <p class="villa-card__flash__label feature">Featured</p>
                                </div>
                                <div class="villa-card__btns">
                                    <a class="villoz-image-popup" href="#" data-gallery-options='{
                                        "items": [
                                            { "src": "assets/images/villa/villa-1-1.jpg" },
                                            { "src": "assets/images/villa/villa-1-2.jpg" },
                                            { "src": "assets/images/villa/villa-1-3.jpg" }
                                        ],
                                        "gallery": { "enabled": true },
                                        "type": "image"
                                    }'>
                                        <span class="icon-camera"></span>
                                        <span class="villa-card__btns__count">3</span>
                                    </a>
                                    <a class="video-popup" href="https://www.youtube.com/watch?v=0MuL8fd3pb8">
                                        <span class="icon-video"></span>
                                    </a>
                                </div>
                            </div>
                            <div class="villa-card__content">
                                <div class="villa-card__ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p class="villa-card__address">Disle-Sur-Mer, Southwest, France</p>
                                <h3 class="villa-card__title"><a href="villa-details.html">The Lake House</a></h3>
                                <div class="villa-card__price">$160 <span class="villa-card__price__shift">/ Night</span></div>
                                <ul class="list-unstyled villa-card__meta">
                                    <li><span class="icon-bed"></span>3 beds</li>
                                    <li><span class="icon-bath"></span>2 baths</li>
                                    <li><span class="icon-users"></span>12 guests</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection