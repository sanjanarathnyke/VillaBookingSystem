@extends('Admin.Layouts.context')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">villaoz | Admin Dashboard</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">&copy;villaoz</a></li>
                                <li class="breadcrumb-item active">villaoz | Admin Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <!-- Summary Cards -->
                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="font-size-xs text-uppercase">Total Countries</h6>
                            <h4 class="mt-4 mb-2">{{ count($chartData['countries'] ?? []) }}</h4>
                            <div class="text-muted">Available destinations</div>
                            <div class="mt-3">
                                <canvas id="countryChartMini" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="font-size-xs text-uppercase">Total Villas</h6>
                            <h4 class="mt-4 mb-2">{{ count($chartData['villadetails'] ?? []) }}</h4>
                            <div class="text-muted">Premium listings</div>
                            <div class="mt-3">
                                <canvas id="villaChartMini" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="font-size-xs text-uppercase">Total Bookings</h6>
                            <h4 class="mt-4 mb-2">{{ count($chartData['bookings'] ?? []) }}</h4>
                            <div class="text-muted">Current reservations</div>
                            <div class="mt-3">
                                <canvas id="bookingChartMini" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="font-size-xs text-uppercase">Total Revenue</h6>
                            <h4 class="mt-4 mb-2">${{ number_format($chartData['bookings']->sum('total_price'), 2) }}</h4>
                            <div class="text-muted">From all bookings</div>
                            <div class="mt-3">
                                <canvas id="revenueChartMini" height="50"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- end row-->

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Recent Bookings</h4>
                            <div class="table-responsive">
                                <table class="table table-hover table-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>ID</th>
                                            <th>Check-In</th>
                                            <th>Check-Out</th>
                                            <th>Extra Guests</th>
                                            <th>Total Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($chartData['bookings']->take(5) as $booking)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $booking->checkin }}</td>
                                            <td>{{ $booking->checkout }}</td>
                                            <td>{{ $booking->extra_guests }}</td>
                                            <td>${{ number_format($booking->total_price, 2) }}</td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="5" class="text-center">No bookings found</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Mini charts
    createMiniChart('countryChartMini', '#3a7bd5', '#00d2ff');
    createMiniChart('villaChartMini', '#11998e', '#38ef7d');
    createMiniChart('bookingChartMini', '#fc4a1a', '#f7b733');
    createMiniChart('revenueChartMini', '#8E2DE2', '#4A00E0');

    // Country Data Chart
    const countryNames = @json($chartData['countries']->pluck('name'));
    const backgroundColors = [
        'rgba(255, 99, 132, 0.7)',
        'rgba(54, 162, 235, 0.7)',
        'rgba(255, 206, 86, 0.7)',
        'rgba(75, 192, 192, 0.7)',
        'rgba(153, 102, 255, 0.7)',
        'rgba(255, 159, 64, 0.7)'
    ];

    new Chart(document.getElementById('countryDataChart'), {
        type: 'pie',
        data: {
            labels: countryNames,
            datasets: [{
                data: Array(countryNames.length).fill(100/countryNames.length),
                backgroundColor: backgroundColors,
                borderColor: backgroundColors.map(color => color.replace('0.7', '1')),
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'right',
                },
                title: {
                    display: true,
                    text: 'Countries Distribution'
                }
            }
        }
    });
});

function createMiniChart(id, color1, color2) {
    const ctx = document.getElementById(id).getContext('2d');
    const gradient = ctx.createLinearGradient(0, 0, 100, 0);
    gradient.addColorStop(0, color1);
    gradient.addColorStop(1, color2);

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: Array(7).fill(''),
            datasets: [{
                data: [0, 10, 5, 15, 10, 20, 15],
                borderColor: gradient,
                borderWidth: 2,
                pointRadius: 0,
                tension: 0.4,
                fill: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                x: {
                    display: false
                },
                y: {
                    display: false
                }
            }
        }
    });
}
</script>
@endpush

