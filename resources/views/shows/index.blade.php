<!-- resources/views/shows/index.blade.php -->
<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="container">
    <h1>List of Shows</h1>
    <form action="{{ route('shows.index') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search by title">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Date</th>
                <th>Artist</th>
                <th>Venue</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($shows as $show)
                <tr>
                    <td>{{ $show->id }}</td>
                    <td>{{ $show->title }}</td>
                    <td>{{ $show->description }}</td>
                    <td>{{ $show->date }}</td>
                    <td>{{ $show->artist->name }}</td> <!-- Assuming you have a relationship set up -->
                    <td>{{ $show->venue->name }}</td> <!-- Assuming you have a relationship set up -->

                    <td>
                        <a href="{{ route('shows.show', $show) }}" class="btn btn-info">View</a>
                        <a href="{{ route('shows.edit', $show) }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
