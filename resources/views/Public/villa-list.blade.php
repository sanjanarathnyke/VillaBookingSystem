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
</section><!-- /.page-header -->

<section class="villa-page">
    <div class="container tabs-box">
        <div class="villa-page__info-top">
            <div class="villa-page__showing-text">Showing 1–1 of 1 Result</div>
            <ul class="villa-page__nav tab-buttons list-unstyled">
                <li data-tab="#list" class="tab-btn active-btn"><span class="icon-list"></span></li>
                <li data-tab="#grid" class="tab-btn"><span class="icon-grid"></span></li>
            </ul>
            <div class="villa-page__showing-sort">
                <select class="selectpicker" aria-label="Sort by ratings">
                    <option selected>Sort by ratings</option>
                    <option value="1">Sort by popular</option>
                    <option value="2">Sort by price</option>
                </select>
            </div>
        </div>
        <div class="tabs-content">
            <!-- List View -->
            <div class="tab active-tab" id="list">
                <div class="row gutter-y-30">
                    @foreach($villas as $villa)
                    <div class="col-lg-12">
                        <div class="villa-card-list villa-card-list--full-width wow fadeInUp" data-wow-delay="100ms">
                            <div class="row d-flex align-items-center">
                                <div class="col-lg-5">
                                    <div class="villa-card-list__image">
                                        <img src="{{ asset($villa->image) }}" alt="{{ $villa->name }}">
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
                                        <p class="villa-card-list__address">{{ $villa->address }}</p>
                                        <h3 class="villa-card-list__title"><a href="{{ route('payment',$villa->id) }}">{{ $villa->name }}</a></h3>
                                        <div class="villa-card-list__price">${{ $villa->price }} <span class="villa-card-list__price__shift">/ Night</span></div>
                                        <ul class="list-unstyled villa-card-list__meta">
                                            <li><span class="icon-bed"></span>{{ $villa->bed_count }} beds</li>
                                            <li><span class="icon-bath"></span>{{ $villa->bath_count }} baths</li>
                                            <li><span class="icon-users"></span>{{ $villa->guest_count }} guests</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Pagination Links -->
                <div class="row mt-4"> <!-- Add margin-top here to create space -->
                    <div class="col-lg-12">
                        <div class="villa-pagination">
                            @if ($villas->currentPage() > 1)
                                <a href="{{ $villas->previousPageUrl() }}" class="btn btn-primary">Previous</a>
                            @endif
                            @if ($villas->hasMorePages())
                                <a href="{{ $villas->nextPageUrl() }}" class="btn btn-primary">Next</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection