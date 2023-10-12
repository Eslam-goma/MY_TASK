<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1>Create Venue</h1>
        <form method="POST" action="{{ route('venues.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Venue Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="description">Venue Description:</label>
                <input type="text" name="description" class="form-control">
            </div>
            <!-- Add more input fields for other details -->
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>
</html>
