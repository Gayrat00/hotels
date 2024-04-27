<nav class="navbar navbar-expand-lg navbar-dark bg-dark" aria-label="Navbar">
    <div class="container-xl">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('hotels.index') }}">Hotels</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reviews.index') }}">Review</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('bookings.index') }}">Booking</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
