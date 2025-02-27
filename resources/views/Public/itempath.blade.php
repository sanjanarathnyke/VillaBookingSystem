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
            @foreach ($displayCountries as $country)
            <div class="col-lg-2 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                <a href="{{ route('single-country', $country->id) }}" class="destination-two__item">
                    <img src="{{ asset($country->image) }}" alt="villoz">
                    <span class="destination-two__item__name">{{$country->name}}</span>
                </a>
            </div>
            @endforeach
        </div><!-- /.row -->
    </div><!-- /.container -->
</section><!-- /.destination-two -->

@endsection