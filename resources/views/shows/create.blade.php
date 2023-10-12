<!-- resources/views/shows/create.blade.php -->
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="container">
    <h1>Create a New Show</h1>
    <form method="POST" action="{{ route('shows.store') }}">
        @csrf
        <div class="form-group">
            <label for="title">Show Title:</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="artist_id">Select Artist</label>
            <select name="artist_id" class="form-control" required>
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}">{{ $artist->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="parent_venue_id">Parent Venue</label>
            <select name="parent_venue_id" class="form-control">
                <option value="">Select a Parent Venue</option>
                @foreach ($venues as $venue)
                    <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Create Show</button>
    </form>
</div>
