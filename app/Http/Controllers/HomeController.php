<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Location;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $hotels =Hotel::all();
        return view('home.index', compact('hotels'));
    }
}
