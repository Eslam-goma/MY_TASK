<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArtistController extends Controller
{

    public function create()
{
    return view('artists.create');
}

public function store(Request $request)
{
    $artist = new Artist;
    $artist->name = $request->input('name');
    $artist->genre = $request->input('genre');
    $artist->description = $request->input('description');


    // Set other attributes
    $artist->save();

    return redirect()->route('artists.index')->with('success', 'Artist created successfully');
}

    //
    // public function show(Artist $artist)
    // {
    //     return view('artists.show', compact('artist'));
    // }
    public function index(Request $request)
{
    $search = $request->input('search');
    $query = Artist::query();

    if ($search) {
        $query->where('name', 'like', '%' . $search . '%');
    }

    $artists = $query->get();

    return view('artists.index', ['artists' => $artists]);
}


    
    public function show($id)
    {
        $artist = Artist::find($id);
        if (!$artist) {
            return abort(404); // Artist not found
        }
        return view('artists.show', compact('artist'));
    }
    
// app/Http/Controllers/ArtistsController.php

// public function search(Request $request)
// {
//     $query = DB::table('artist'); // Example query builder initialization

//     $artists = Artist::where('name', 'like', '%' . $query . '%')
//         ->orWhere('genre', 'like', '%' . $query . '%')
//         ->get();

//     return view('artists.search', compact('artist', 'query'));
// }

public function search(Request $request)
{
    $search = $request->input('search');

    // Perform the search query
    $artists = Artist::where('name', 'like', '%' . $search . '%')
        ->orWhere('description', 'like', '%' . $search . '%')
        ->paginate(10);

        return view('artists.index', compact('artists', 'search'));    }

public function edit(Request $request,$id)
{
    $artist = Artist::find($id);
    return view('artists.edit', compact('artist'));
}

public function save(Request $request, $id) {

    $data = $request->all();
    $id = isset($data['id'])?$data['id']:0;
    $name = isset($data['name'])?$data['name']:'';
    $genre = isset($data['genre'])?$data['genre']:'';
    $description = isset($data['description'])?$data['description']:'';

    $param = [
        'name' => $name ,
        'genre' => $genre,
        'description' => $description,
    ];

    Artist::where('id', $id)->update($param);

    return redirect('artists');
}
}
