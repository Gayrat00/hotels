@extends('layouts.app')
@section('title')
    Home
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
                        <div class="border rounded p-2">
                            <div class="h6 mb-0">
                                <a href="{{ route('hotels.index', ['hotels' => $hotel->id]) }}"
                                   class="link-dark text-decoration-none">
                                    {{ $hotel->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
{{--        <div class="mb-5">--}}
{{--            <div class="h4 text-primary mb-3">--}}
{{--                LOCATIONS--}}
{{--            </div>--}}
{{--            <div class="row g-3">--}}
{{--                @foreach($locations as $location)--}}
{{--                    <div class="col">--}}
{{--                        <div class="border rounded p-2">--}}
{{--                            <div class="h6 mb-0">--}}
{{--                                <a href="{{ route('hotels.index', ['location' => $location->id]) }}"--}}
{{--                                   class="link-dark text-decoration-none">--}}
{{--                                    {{ $location->city }}--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}

