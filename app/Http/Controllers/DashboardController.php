<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\StoreVillaInfoRequest;
use App\Http\Requests\StoreVillaRequest;
use App\Models\Country;
use App\Models\Villa;
use App\Services\CountryService;
use App\Services\VillaInfoService;
use App\Services\VillaService;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $countryservice;
    protected $villservice;
    protected $villainfoservice;

    public function __construct(CountryService $countryservice, VillaService $villaService, VillaInfoService $villainfoservice)
    {
        $this->countryservice = $countryservice;
        $this->villservice = $villaService;
        $this->villainfoservice = $villainfoservice;
    }
    public function Store(StoreCountryRequest $request)
    {
        $this->countryservice->createCountry($request->validated(), $request->file('image'));
        return redirect()->back()->with('success', 'Country created successfully');
    }

    public function create()
    {
        $countries = Country::all();
        return view('Admin.villa-info', compact('countries'));
    }

    public function storeVilla(StoreVillaRequest $request)
    {

        $this->villservice->create($request->validated());
        return redirect()->back()->with('success', 'Villa created successfully');
    }

    public function createvillainfo()
    {
        $villas = Villa::all();
        return view('Admin.villa-details', compact('villas'));
    }

    public function storevillaInfo(StoreVillaInfoRequest $request)
    {
        $validatedData = $request->validated();


        $this->villainfoservice->createvillainfo($validatedData);

        return redirect()->back()->with('success', 'Villa Info created successfully');
    }

}
