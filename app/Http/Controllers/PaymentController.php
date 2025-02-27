<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use App\Models\VillaInfo;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show($id)
{
    $villa = Villa::findOrFail($id); // Retrieve the villa by ID
    return view('Public.payment', compact('villa'));
}

}
