@extends('layouts.app')
@section('title')
    {{ $hotel->name }} Hotel
@endsection
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-8">
                <div class="card shadow mb-3">
                    <img src="{{ asset('img/hotels/hotel-' . $hotel->id . '.jpg') }}" class="w-50"">
                    <div class="card-body">
                        <h2 class="card-title">{{ $hotel->name }}</h2>
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <span class="fw-bold">Rating:</span>
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $hotel->rating)
                                    <span class="star filled text-warning">&#9733;</span>
                                @else
                                    <span class="star ">&#9734;</span>
                                @endif
                            @endfor
                            <br>
                        </div>
                        <p class="card-text">{{ $hotel->description }}</p>
                        <div class="d-flex align-items-center">
                            <span class="fw-bold me-2">Address:</span>
                            {{ $hotel->address }}
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="fw-bold me-2">Price per Night:</span>
                            ${{ $hotel->price_per_night }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                @if (isset($hotel->rooms))
                    <h3>Available Rooms</h3>
                    <ul class="list-group list-group-flush">
                        @foreach ($hotel->rooms as $room)
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <div>
                                    <h4>{{ $room->type }}</h4>
                                    <p class="mb-0">Price per Night: ${{ $room->price_per_night }}</p>
                                </div>
                                @if ($room->availability)
                                    <span class="badge bg-success rounded-pill">Available</span>
                                @else
                                    <span class="badge bg-danger rounded-pill">Unavailable</span>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
    </div>
@endsection
