<?php

namespace App\Http\Controllers;

use App\Mail\BookingConfirmation;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BookingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'checkin' => 'required|date',
            'checkout' => 'required|date|after:checkin',
            'email' => 'required|email',
            'extra_guests' => 'required|integer|min:0',
            'total_price' => 'required|numeric|min:0|max:99999.99',
        ]);

        Booking::create($validated);

        Mail::to($validated['email'])->send(new BookingConfirmation($validated));

        return redirect()->back()->with('success', 'Booking confirmed! Check your email for details.');
    }
}
