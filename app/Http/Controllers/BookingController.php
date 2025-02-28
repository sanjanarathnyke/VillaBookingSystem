<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        // Validate and store booking data
        $validated = $request->validate([
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'email' => 'required|email',
            'extra_guests' => 'required|integer|min:0',
            'total_price' => 'required|numeric|min:0|max:99999.99',
        ]);

        Booking::create($validated);

        return redirect()->back()->with('success', 'Booking successful!');
    }
}
