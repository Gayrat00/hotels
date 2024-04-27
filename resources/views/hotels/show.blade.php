@extends('layouts.app')
@section('title')
    Hotel show
@endsection
@section('content')
    <div class="container py-4">
        <div class="mb-5">
            <h2>{{ $hotel->name }}</h2>
            <div class="hotel-details">
                <span class="h6">Adress:</span>  {{ $hotel->address }} <br>
                <span class="h6">Rating:</span> {{ $hotel->rating }} <br>
                <span class="h6">Description:</span> {{ $hotel->description }}
                <span class="h6">Price:</span> {{ $hotel->price_per_night }}
            </div>
        </div>
        @if (isset($hotel->rooms))
            <h3 >Available Rooms</h3>
            <ul>
                @foreach ($hotel->rooms as $room)
                    <li>
                        <h2>{{ $room->type }}</h2>
                        Availability:
                        @if ($room->availability)
                            <span class="text-success fw-bold">Yes</span>
                        @else
                            <span class="text-danger">No</span>
                        @endif
                    </li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
