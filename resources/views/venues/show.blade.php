<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
    <div class="container">
        <h1>Venue Details</h1>

        <div class="card">
            <div class="card-body">
                <h2> Name:{{ $venue->name }}</h2>
                <p>Description: {{ $venue->description }}</p>

                <a href="{{ route('venues.index') }}" class="btn btn-primary">Back to Venues</a>
            </div>
        </div>
    </div>
