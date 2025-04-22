@extends('Admin.Layouts.context')
@section('content')
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">Villa Information</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                    <li class="breadcrumb-item active">Villa Details</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Villa Details</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('villas.store') }}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="mb-3 row">
                                        <label for="villa-name" class="col-md-2 col-form-label">Villa Name</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="villa-name" name="name">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="country-name" class="col-md-2 col-form-label">Country Name</label>
                                        <div class="col-md-10">
                                            <select class="form-control" id="country-name" name="country_id" required>
                                                <option value="">Select a country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>


                                    <div class="mb-3 row">
                                        <label for="villa-image" class="col-md-2 col-form-label">Villa Image</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="file" id="villa-image" name="image">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="address" class="col-md-2 col-form-label">Address</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="price" class="col-md-2 col-form-label">Price</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" id="price" name="price">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="bed-count" class="col-md-2 col-form-label">Bed Count</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" id="bed-count" name="bed_count">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="bath-count" class="col-md-2 col-form-label">Bath Count</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" id="bath-count" name="bath_count">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="guest-count" class="col-md-2 col-form-label">Guest Count</label>
                                        <div class="col-md-10">
                                            <input class="form-control" type="number" id="guest-count" name="guest_count">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fas fa-plus me-1"></i> Add New
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('Admin.Footer.dashboard-footer')
    </div>
@endsection
