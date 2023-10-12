<!-- resources/views/artists/search.blade.php -->

<head>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<div class="container">
    <h1>Search Artists</h1>
    <form action="{{ route('artists.search') }}" method="GET">
        <div class="form-group">
            <input type="text" name="search" class="form-control" placeholder="Search artists">
        </div>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>

    @if (isset($search))
        <h2>Search Results for "{{ $search }}"</h2>
    @endif

    @if (count($artists) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($artists as $artist)
                    <tr>
                        <td>{{ $artist->id }}</td>
                        <td>{{ $artist->name }}</td>
                        <td>{{ $artist->description }}</td>
                        <td>
                            <a href="{{ route('artists.show', $artist) }}" class="btn btn-info">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        @if (isset($search))
            <p>No artists found for "{{ $search }}".</p>
        @endif
    @endif
</div>
