@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="container py-4">
        <div class="mb-5">
            <h4 class="text-primary mb-3">Hotels</h4>
            <div class="row g-3">
                @foreach($hotels as $hotel)
                    <div class="col">
                        <div class="card h-100 border-0 rounded p-2">
                            <div class="card-body">
                                <h6 class="card-title mb-0">
                                    <a href="{{ route('hotels.index', ['hotel' => $hotel->id]) }}" class="link-dark text-decoration-none">
                                        {{ $hotel->name }}
                                        <span class="text-muted">
                                    ({{ $hotel->rating }}) - {{ $hotel->address }}
                                </span>
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="mb-5">
            <h4 class="text-primary mb-3">Locations</h4>
            <div class="row g-3">
                @foreach($locations as $location)
                    <div class="col">
                        <div class="card h-100 border-0 rounded p-2">
                            <div class="card-body">
                                <h6 class="card-title mb-0">
                                    <a href="{{ route('hotels.index', ['location' => $location->id]) }}" class="link-dark text-decoration-none">
                                        {{ $location->city }}, {{ $location->country }}
                                        @if($location->state)
                                            <span class="text-muted">({{ $location->state }})</span>
                                        @endif
                                        @if($location->postal_code)
                                            <br>
                                            <span class="text-muted">Postal Code: {{ $location->postal_code }}</span>
                                        @endif
                                    </a>
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

