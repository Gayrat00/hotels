@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
    <div class="container py-4">
        <div class="mb-5">
            <h4 class="text-primary mb-3">Locations</h4>
            <div class="row g-3">
                @foreach($locations as $location)
                    <div class="col">
                        <div class="card h-100 border-0 rounded p-2">
                            <div class="card-body">
                                <h6 class="card-title mb-0">
                                    <a href="{{ route('hotels.index', ['location' => $location->id]) }}" class="link-dark text-decoration-none">
                                        <span class="text-dark">Country:</span>
                                        <span class="text-secondary">{{ $location->country }}</span>
                                    </a>
                                    <span class="badge bg-warning-subtle text-warning-emphasis rounded-pill">
                                    {{ $location->hotels_count }}
                                </span>
                                </h6>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

