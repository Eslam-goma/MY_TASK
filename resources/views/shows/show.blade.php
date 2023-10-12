<!-- resources/views/shows/show.blade.php -->
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="container">
    <h1>Show Details</h1>

    <div class="card">
        <div class="card-body">
            <h2>{{ $show->title }}</h2>
            <p>Description: {{ $show->description }}</p>
            <p>Date: {{ $show->date }}</p>
            <p>Artist: {{ $show->artist->name }}</p> <!-- Assuming you have a relationship set up -->
            <p>Venue: {{ $show->venue->name }}</p> <!-- Assuming you have a relationship set up -->

            <a href="{{ route('shows.index') }}" class="btn btn-primary">Back to Shows</a>
        </div>
    </div>
</div>
