<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        $hotels =Hotel::all();
//        return view('home.index', compact('hotels'));
//
//        $locations =Location::all();
//        return view('home.index', compact('locations'));

        $locations = Location::withCount('hotels')
            ->orderBy('city')
            ->orderBy('country')
            ->orderBy('state')
            ->get();

        $hotels = Hotel::with('location')
            ->orderBy('name')
            ->orderBy('address')
            ->orderBy('rating')
            ->get();

        return view('home.index', compact('locations', 'hotels'));
    }
}
