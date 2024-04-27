@extends('layouts.app')
@section('title')
    Hotels
@endsection
@section('content')
    <div class="container py-4">
        <div class="mb-5">
            <div class="h4 text-primary mb-3">
                Hotels
            </div>
            <div class="row g-3">
                @foreach($hotels as $hotel)
                    <div class="col">
                        <div class="card h-100 border-0 rounded p-2">
                            <div class="card-body">
                                <h6 class="card-title mb-0">
                                    <a href="{{ route('hotels.show', ['hotel' => $hotel->id]) }}" class="link-dark text-decoration-none">
                                        {{ $hotel->name }}
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
