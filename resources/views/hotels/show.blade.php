@extends('layouts.app')
@section('title')
    {{ $hotel->name }} Hotel
@endsection
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-sm-auto">
                <div class="mb-3">
                    <img src="{{ asset('img/hotels/hotel-' . $hotel->id . '.jpg') }}" class="img-fluid ">
                </div>
            </div>
            <div class="col-sm">
                <div class="card-body">
                    <h2 class="card-title">{{ $hotel->name }}</h2>
                    <span class="fw-bold">Rating:</span>
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $hotel->rating)
                            <span class="star filled text-warning">&#9733;</span>
                        @else
                            <span class="star ">&#9734;</span>
                        @endif
                    @endfor
                    <br>
                    <div class="d-flex align-items-center">
                        <span class="fw-bold me-2">Address:</span>
                        {{ $hotel->address }}
                    </div>
                    <div class="d-flex align-items-center">
                        <span class="fw-bold me-2">Price per Night:</span>
                        ${{ $hotel->price_per_night }}
                    </div>
                </div>
                <p class="card-text"><span class="fw-bold">Description:</span> {{ $hotel->description }}</p>
                @if ($hotel->rooms->isNotEmpty())
                    @foreach ($hotel->rooms as $room)
                        <span class="badge rounded-pill {{ $room->availability ? 'bg-success' : 'bg-danger' }}">
                          {{ $room->availability ? 'Availability Room: Yes' : 'Availability: No' }}
                       </span>
                    @endforeach
                @else
                    <span class="badge rounded-pill bg-danger">
                        <span class="fw-bold me-2">Availability Room: No</span>
                    </span>
                @endif
            </div>
        </div>
    </div>
@endsection
