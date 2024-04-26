<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $locations = Location::withCount('hotels')
            ->orderBy('city')
            ->get();

        return view('home.index')
            ->with([
                'locations' => $locations,
            ]);
    }
}
