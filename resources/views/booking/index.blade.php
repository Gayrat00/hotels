@extends('layouts.app')
@section('title')
    Booking
@endsection
@section('content')
    <div class="container py-4">
        <div class="mb-5">
            <h2 class="text-primary text-center mb-4 h1 ">Bookings</h2>
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Room</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Total Price</th>
                </tr>
                </thead>
                <tbody>
                @forelse ($bookings as $booking)
                    <tr>
                        <td>{{ $booking->room->room_type }}</td> <td>{{ $booking->start_date }}</td>
                        <td>{{ $booking->end_date }}</td>
                        <td>${{ $booking->total_price }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No bookings found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection


