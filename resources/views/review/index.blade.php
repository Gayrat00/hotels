@extends('layouts.app')
@section('title')
    Reiew
@endsection

@section('content')
    <div class="container py-4">
        <h2 class="text-primary text-center mb-4 h1 ">Hotel Reviews</h2>

        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @forelse ($reviews as $review)
                <div class="col">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $review->hotel->name }} Review</h5>
                            <p class="card-text">
                                <span class="fw-bold">Reviewer:</span> {{ $review->user->name ?? 'Anonymous' }} <br>
                                <span class="fw-bold">Rating:</span>
                                @for ($i = 0; $i < 5; $i++)
                                    @if ($i < $review->rating)
                                        <span class="star filled text-warning">&#9733;</span>
                                    @else
                                        <span class="star ">&#9734;</span>
                                    @endif
                                @endfor
                                <br>
                                <span class="fw-bold">Comment:</span> {{ $review->comment }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col">
                    <div class="alert alert-secondary d-flex align-items-center" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" viewBox="0 0 24 24"><path d="M9 12H5M9 16H5M9 20H5M5 12V16L9 16V12zM15 12H11M15 16H11M15 20H11M11 12V16L15 16V12z"></svg>
                        <span class="ms-2">No reviews found.</span>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
@endsection
