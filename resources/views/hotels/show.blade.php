
<h1>{{ $hotel->name }}</h1>
<div class="hotel-details">
    <p>Adress: {{ $hotel->address }}</p>
    <p>Location: {{ $hotel->location }}</p>
    <p>Star Rating: {{ $hotel->rating }}</p>
    <p>Description: {{ $hotel->description }}</p>

    @if (isset($hotel->rooms)) <h2>Available Rooms</h2>
    <ul>
        @foreach ($hotel->rooms as $room)
            <li>
                <a href="{{ route('rooms.show', $room) }}">{{ $room->type }}</a> (Price: ${{ $room->price }})
            </li>
        @endforeach
    </ul>
    @endif
</div>
