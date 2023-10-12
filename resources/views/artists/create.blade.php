<!-- Include your custom CSS file -->
<head>
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="container">
    <h1>Create a New Artist</h1>
    <form method="POST" action="{{ route('artists.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="genre">Genre</label>
            <input type="text" name="genre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control" required></textarea>
        </div>
        <!-- Add more artist fields as needed -->

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Create Artist</button>
        </div>
    </form>
</div>
