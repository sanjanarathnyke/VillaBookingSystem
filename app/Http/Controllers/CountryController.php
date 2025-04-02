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
        $country = Country::find($id);

        if (!$country) {
            return abort(404, 'Country not found');
        }

        // Ensure $villas is always defined
        $villas = Villa::where('country_id', $id)->get()->unique();

        // dd($villas);
        return view('Public.singleitem', compact('country', 'villas'));
    }

    public function index()
    {
        $countries = Country::all();
    return view('Public.Dashboard.dashboard-country', compact('countries'));
    }
}
