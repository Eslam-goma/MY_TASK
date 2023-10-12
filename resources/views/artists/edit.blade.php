<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="container">
    <h1 class="mb-4">Edit Artist</h1>

    <form action="{{ route('artists.update', $artist->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT method for updating -->

        <input type="hidden" name="id" value="{{ $artist->id }}"><br />

        <div class="form-group">
            <label for="name">Artist Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $artist->name }}">
        </div>

        <div class="form-group">
            <label for="genre">Artist Genre:</label>
            <input type="text" name="genre" class="form-control" value="{{ $artist->genre }}">
        </div>

        <div class="form-group">
            <label for="description">Artist Description:</label>
            <input type="text" name="description" class="form-control" value="{{ $artist->description }}">
        </div>

        <!-- Add more input fields for other details -->

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
