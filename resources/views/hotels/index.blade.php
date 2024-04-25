<h1>List of Hotels</h1>

<ul>
    @foreach ($hotels as $hotel)
        <li><a href="{{ route('hotels.show', $hotel) }}">{{ $hotel->name }}</a></li>
    @endforeach
</ul>
