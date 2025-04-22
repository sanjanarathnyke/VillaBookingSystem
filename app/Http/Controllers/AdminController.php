<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showDashboard()
    {
        return view('Admin.dashboard');
    }
    public function showVillaBookings()
    {

        $bookings = Booking::all();
        return view('Admin.villa-bookings', compact('bookings'));
    }

    public function showCountryInfo()
    {
        return view('Admin.country-info');
    }
}
