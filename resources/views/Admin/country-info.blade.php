@extends('Admin.Layouts.context')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Country Details</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Country Details</li>
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
                            <h4 class="card-title">Country Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('country.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="country-name" class="col-md-2 col-form-label">Country Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="country-name" name="name" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="country-image" class="col-md-2 col-form-label">Country Image</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="file" id="country-image" name="image"
                                            accept="image/*" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="languages-spoken" class="col-md-2 col-form-label">Languages
                                        Spoken</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="languages-spoken"
                                            name="languagespoke" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="capital" class="col-md-2 col-form-label">Capital</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="capital" name="capital" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="currency" class="col-md-2 col-form-label">Currency</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="currency" name="currency" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="visa-requirements" class="col-md-2 col-form-label">Visa
                                        Requirements</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="visa-requirements" name="visarequimnets"
                                            rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="area" class="col-md-2 col-form-label">Area</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <input class="form-control" type="number" id="area" name="area" min="0"
                                                step="0.01" required>
                                            <span class="input-group-text">sq km</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="description" class="col-md-2 col-form-label">Description</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="description" name="desctription" rows="5"
                                            required></textarea>
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
