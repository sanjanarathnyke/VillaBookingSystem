<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Villa;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function showCountries()
    {
        $displayCountries = Country::all();
        return view('Public.itempath', compact('displayCountries'));
    }

    public function showSingleCountry($id)
    {
        $country = Country::findOrFail($id);
        $villas = Villa::where('country_id', $id)->get();
        return view('Public.singleitem', compact('country','villas'));
    }
    
    
}
