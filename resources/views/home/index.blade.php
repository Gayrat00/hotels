<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>
<body>
<h1>Welcome to Our Hotel Listing!</h1>
@if (count($hotels) > 0)
    <table>
        <thead>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Rating</th>
            <th>Price per Night</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($hotels as $hotel)
            <tr>
                <td>{{ $hotel->name }}</td>
                <td>{{ $hotel->address }}</td>
                <td>{{ $hotel->rating }}</td>
                <td>${{ number_format($hotel->price_per_night, 2) }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@else
    <p>No hotels found.</p>
@endif
</body>
</html>
