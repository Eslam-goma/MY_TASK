<!-- resources/views/shows/edit.blade.php -->
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="container">
    <h1>Edit Show</h1>
    <form method="POST" action="{{ route('shows.update', $show->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Show Title:</label>
            <input type="text" name="title" value="{{ $show->title }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description">{{ $show->description }}</textarea>
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" name="date" value="{{ $show->date }}">
        </div>
        <div class="form-group">
            <label for="artist_id">Artist:</label>
            <select name="artist_id">
                @foreach ($artists as $artist)
                    <option value="{{ $artist->id }}" {{ $show->artist_id === $artist->id ? 'selected' : '' }}>
                        {{ $artist->name }}
                    </option>
                @endforeach
            </select>
        </div><div class="form-group">
            <label for="venue_id">Venue:</label>
            <select name="venue_id">
                @foreach ($venues as $venue)
                    <option value="{{ $venue->id }}" {{ $show->venue_id === $venue->id ? 'selected' : '' }}>
                        {{ $venue->name }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit">Update</button>
    </form>
</div>
