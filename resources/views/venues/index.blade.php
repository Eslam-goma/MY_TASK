<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="container">

<form action="{{ route('venues.index') }}" method="GET">
    <div class="form-group">
        <input type="text" name="search" class="form-control" placeholder="Search by name">
    </div>
    <button type="submit" class="btn btn-primary">Search</button>
</form>
<!-- resources/views/venues/index.blade.php -->
    <h1>List of venues</h1>
    
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($venues as $venue)
                <tr>
                    <td>{{ $venue->name }}</td>
                    <td>{{ $venue->description }}</td>
                    <td>
                        <a href="{{ route('venues.show', $venue) }}" class="btn btn-info">View</a>
                        <a href="{{ route('venues.edit', $venue) }}" class="btn btn-info">Edit</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
