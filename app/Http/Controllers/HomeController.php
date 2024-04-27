<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $locations = Location::withCount('hotels')
            ->orderBy('city')
            ->orderBy('country')
            ->orderBy('state')
            ->get();

        $hotels = Hotel::with('rooms')
            ->orderBy('name')
            ->orderBy('address')
            ->orderBy('rating')
            ->get();

//        return view('home.index')
//            ->with([
//                'locations' => $locations,
//                'brands' => $hotels,
//            ]);
        return view('home.index', compact('locations', 'hotels',));
    }
}
