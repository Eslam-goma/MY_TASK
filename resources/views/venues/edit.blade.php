<!-- resources/views/venues/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Venue</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Edit Venue</h1>
        <form method="POST" action="{{ route('venues.update', $venue->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Venue Name:</label>
                <input type="text" name="name" value="{{ $venue->name }}" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Venue Description:</label>
                <input type="text" name="description" value="{{ $venue->description }}" class="form-control">
            </div>
            <!-- Add more input fields for other details -->
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>
