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
        <h2 class="page-header__title">Destinations</h2>
    </div><!-- /.container -->
</section><!-- /.page-header -->

<section class="destination-two">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <a href="destination-details.html" class="destination-two__item">
                    <img src="assets/images/destination/destination-2-1.jpg" alt="villoz">
                    <span class="destination-two__item__name">Spain</span>
                </a>
            </div>
            <div class="col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                <a href="destination-details.html" class="destination-two__item">
                    <img src="assets/images/destination/destination-2-2.jpg" alt="villoz">
                    <span class="destination-two__item__sub-name">Wildlife</span>
                    <span class="destination-two__item__name">Thailand</span>
                </a>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                <a href="destination-details.html" class="destination-two__item">
                    <img src="assets/images/destination/destination-2-3.jpg" alt="villoz">
                    <span class="destination-two__item__name">Africa</span>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <a href="destination-details.html" class="destination-two__item">
                    <img src="assets/images/destination/destination-2-4.jpg" alt="villoz">
                    <span class="destination-two__item__name">Australia</span>
                </a>
            </div>
            <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                <a href="destination-details.html" class="destination-two__item">
                    <img src="assets/images/destination/destination-2-5.jpg" alt="villoz">
                    <span class="destination-two__item__sub-name">Adventure</span>
                    <span class="destination-two__item__name">Swizerlan</span>
                </a>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="550ms">
                <a href="destination-details.html" class="destination-two__item">
                    <img src="assets/images/destination/destination-2-6.jpg" alt="villoz">
                    <span class="destination-two__item__name">England</span>
                </a>
            </div>
            <div class="col-lg-8 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <a href="destination-details.html" class="destination-two__item">
                    <img src="assets/images/destination/destination-2-7.jpg" alt="villoz">
                    <span class="destination-two__item__sub-name">New</span>
                    <span class="destination-two__item__name">Europe</span>
                </a>
            </div>
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="650ms">
                <a href="destination-details.html" class="destination-two__item">
                    <img src="assets/images/destination/destination-2-8.jpg" alt="villoz">
                    <span class="destination-two__item__name">Dubai</span>
                </a>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.destination-two -->

@endsection