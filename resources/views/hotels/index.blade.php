@extends('layouts.app')

@section('title')
    Hotels
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="text-primary text-center mb-4 h1 ">Explore Our Hotels</h2>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse($hotels as $hotel)
                <div class="col">
                    <div class="card shadow-sm h-100">
                        <a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}">
                            <img src="{{ asset('img/hotels/hotel-' . $hotel->id . '.jpg') }}" class="card-img-top img-fluid">
                        </a>
                        <div class="card-body">
                            <a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}">
                                <h5 class="card-title">{{ $hotel->name }}</h5>
                            </a>
                            <span class="fw-bold">Rating:</span>
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < $hotel->rating)
                                    <span class="star filled text-warning">&#9733;</span>
                                @else
                                    <span class="star ">&#9734;</span>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-secondary d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" viewBox="0 0 24 24"><path d="M10.9 14.3l4.6-4.6a1 1 0 0 0-1.4-1.4l-4.6 4.6a1 1 0 0 0 0 1.4zM14.3 10.9l4.6-4.6a1 1 0 1 0-1.4-1.4l-4.6 4.6a1 1 0 0 0 0 1.4zM10.9 7.5l4.6-4.6a1 1 0 0 0-1.4-1.4l-4.6 4.6a1 1 0 0 0 0 1.4z"></svg>
                        <span class="ms-2">No hotels found.</span>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection

