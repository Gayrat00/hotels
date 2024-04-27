<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function index()
    {
//        $locations =Location::all();
//        return view('home.index', compact('locations'));

        $locations = Location::withCount('hotels')
            ->orderBy('country')
            ->orderBy('city')
            ->get();

        return view('home.index')
            ->with([
                'locations' => $locations,
            ]);
    }
    public function show(Location $location)
    {
        return view('locations.show', compact('location'));
    }
}
