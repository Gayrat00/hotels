<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function index(Request $request)
    {
        $request->validate([
            'location' => 'nullable|integer|min:1',
        ]);

        $f_location = $request->has('location') ? $request->location : null;


        $hotels = Hotel::when(isset($f_location), function ($query) use ($f_location) {
            return $query->where('location_id', $f_location);
        })->with('Location')->get();

        return view('hotels.index', compact('hotels'));
    }


    public function show(Hotel $hotel)
    {
        return view('hotels.show', compact('hotel'));
    }

}
