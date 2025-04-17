<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVillaRequest;
use App\Services\VillaService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $villaservice;

    public function __construct(VillaService $villaservice)
    {
        $this->villaservice = $villaservice;
    }
    public function store(StoreVillaRequest $request)
    {
        $this->villaservice->store($request->validated());
        
        return redirect()->back()->with('success', 'Villa created successfully');
    }
}
