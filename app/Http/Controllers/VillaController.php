<?php

namespace App\Http\Controllers;

use App\Models\Villa;
use Illuminate\Http\Request;

class VillaController extends Controller
{
    public function index()
    {
        // Fetch all villas from the database
        $villas = Villa::paginate(10);

        // Pass the villas to the view
        return view('Public.villa-list', compact('villas'));
    }

}
