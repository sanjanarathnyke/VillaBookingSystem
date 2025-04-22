@extends('Admin.Layouts.context')
@section('content')
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
                            <h4 class="card-title">Booking Records Table</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr class="bg-primary text-white">
                                            <th scope="col" class="align-middle">ID</th>
                                            <th scope="col" class="align-middle">Check-in Date</th>
                                            <th scope="col" class="align-middle">Check-out Date</th>
                                            <th scope="col" class="align-middle">Guest Email</th>
                                            <th scope="col" class="align-middle">Additional Guests</th>
                                            <th scope="col" class="align-middle">Total Amount ($)</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($bookings as $index => $booking)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ \Carbon\Carbon::parse($booking->checkin)->format('M d, Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($booking->checkout)->format('M d, Y') }}</td>
                                            <td>{{ $booking->email }}</td>
                                            <td class="text-center">{{ $booking->extra_guests }}</td>
                                            <td class="text-end">${{ number_format($booking->total_price, 2) }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
