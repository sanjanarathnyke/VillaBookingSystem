@extends('Admin.Layouts.context')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Villa Details</h4>
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
                            <form action="{{ route('villa-info.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="villa-name" class="col-md-2 col-form-label">Villa Name</label>
                                    <div class="col-md-10">
                                        <select class="form-control" id="villa-name" name="villa_id" required>
                                            <option value="">Select a Villa</option>
                                            @foreach ($villas as $villa)
                                                <option value="{{ $villa->id }}">{{ $villa->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="fun-discovery" class="col-md-2 col-form-label">Fun Discovery</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="fun-discovery" name="fun_discovery" rows="3" required></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="amenities" class="col-md-2 col-form-label">Amenities</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="amenities" name="amenities" rows="4" required></textarea>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="overview" class="col-md-2 col-form-label">Overview</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="overview" name="overview" rows="5" required></textarea>
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
