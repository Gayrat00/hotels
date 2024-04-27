
<h1>{{ $hotel->name }}</h1>
<div class="hotel-details">
    <p>Adress: {{ $hotel->address }}</p>
    <p>Star Rating: {{ $hotel->rating }}</p>
    <p>Description: {{ $hotel->description }}</p>
    <p>Price: {{ $hotel->price_per_night }}</p>

    @if (isset($hotel->rooms))
        <h2>Available Rooms</h2>
        <ul>
            @foreach ($hotel->rooms as $room)
                <li>
                    <h2>{{ $room->type }}</h2>
                    Availability:
                    @if ($room->availability)
                        <span class="text-success">Yes</span>
                    @else
                        <span class="text-danger">No</span>
                    @endif
                </li>
            @endforeach
        </ul>
    @endif
</div>
