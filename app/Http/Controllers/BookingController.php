<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::with('user', 'room')->get();
        return view('booking.index', compact('bookings'));
    }

    public function show(Booking $booking)
    {
        return view('booking.show', compact('booking'));
    }



}
