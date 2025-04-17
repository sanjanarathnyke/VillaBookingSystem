@extends('Admin.Layouts.context')
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
                            <form action="/submit-villa-details" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="villa-name" class="col-md-2 col-form-label">Villa Name</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="text" id="villa-name" name="villaname" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="fun-discovery" class="col-md-2 col-form-label">Fun Discovery</label>
                                    <div class="col-md-10">
                                        <textarea class="form-control" id="fun-discovery" name="fundescovery" rows="3" required></textarea>
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

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script> &copy; Dashonic.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://Pichforest.com/" target="_blank" class="text-reset">Pichforest</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
