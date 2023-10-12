<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    </head>
    <div class="container">
        <h1>Artist Details</h1>

        <div class="card">
            <div class="card-body">
                <h2>{{ $artist->name }}</h2>
                <p>Genre: {{ $artist->genre }}</p>
                <p>Origin: {{ $artist->origin }}</p>

                <a href="{{ route('artists.index') }}" class="btn btn-primary">Back to Artists</a>
            </div>
        </div>
    </div>
