<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showDashboard()
    {
        $chartData = [
            'countries' => DB::table('countries')
                ->select('name', 'capital', 'area', 'currency')
                ->get(),

            'villadetails' => DB::table('villas')
                ->select('name', 'price')
                ->where('price', '>=', 2000)
                ->get(),
            'bookings' => DB::table('bookings')
                ->select('extra_guests', 'checkin', 'checkout', 'total_price')
                ->get(),
        ];

        
        return view('Admin.dashboard', compact('chartData'));
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
