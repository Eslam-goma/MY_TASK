<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Show;
use Illuminate\Http\Request;
use App\Models\Venue;
use App\Models\Artist;
class ShowController extends Controller
{
    //
    public function show(Show $show)
{
    return view('shows.show', compact('show'));
}

public function index()
{
    $venues = Venue::all(); // Retrieve venues from the database

    return view('venues.index', ['venues' => $venues]);
}

public function create()
{
    // Retrieve the list of artists and venues from the database.
    $artists = Artist::all();
    $venues = Venue::all();

    // Pass the $artists and $venues variables to the view.
    return view('shows.create', compact('artists', 'venues'));
}


public function store(Request $request)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'date' => 'required',
        'artist_id' => 'required',
        'venuet_id' => 'required',
        
        // Add artist_id validation
    ]);

    Show::create([
        'title' => $request->input('title'),
        'description' => $request->input('description'),
        'date' => $request->input('date'),
        'artist_id' => $request->input('artist_id'), 
        'venue_id' => $request->input('venue_id'), 
        
        // Include artist_id
    ]);

    return redirect()->route('shows.index')->with('success', 'Show created successfully.');
}

    public function edit(Show $show)
    {
        return view('shows.edit', compact('show'));
    }

    public function update(Request $request, Show $show)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'title' => 'required|max:255',

            'description'=>'required',
'data'=>'required'
        ]);
    
        // Update the show with the validated data
        $show->update($validatedData);
    
        // Redirect to the show's details page
        return redirect()->route('shows.show', $show->id)->with('success', 'Show updated successfully');
    }
}
