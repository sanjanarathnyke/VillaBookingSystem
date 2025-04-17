@extends('Admin.Layouts.context')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">Booking Records</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                <li class="breadcrumb-item active">Booking Records</li>
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
                            <h4 class="card-title">Booking Records</h4>
                        </div>
                        <div class="card-body">
                            <form action="/submit-booking" method="POST">
                                @csrf
                                <div class="mb-3 row">
                                    <label for="checkin" class="col-md-2 col-form-label">Check-in Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" id="checkin" name="checkin" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="checkout" class="col-md-2 col-form-label">Check-out Date</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="date" id="checkout" name="checkout" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="email" class="col-md-2 col-form-label">Email</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="email" id="email" name="email" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="extraguests" class="col-md-2 col-form-label">Extra Guests</label>
                                    <div class="col-md-10">
                                        <input class="form-control" type="number" id="extraguests" name="extraguests" min="0" value="0" required>
                                    </div>
                                </div>

                                <div class="mb-3 row">
                                    <label for="totalprice" class="col-md-2 col-form-label">Total Price</label>
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <span class="input-group-text">$</span>
                                            <input class="form-control" type="number" id="totalprice" name="totalprice" min="0" step="0.01" required>
                                        </div>
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
