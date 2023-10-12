<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Venue;
use Illuminate\Http\Request;
use App\Models\Artist;
class VenueController extends Controller
{
    //
    public function index(Request $request)
    {
        $search = $request->input('search');
        $query = Venue::query();
    
        if ($search) {
            $query->where('name', 'like', '%' . $search . '%');
        }
    
        $venues = $query->get();
    
        return view('venues.index', ['venues' => $venues]);
    }

   
    public function create()
{
    // Fetch the list of venues from your database
    $venues = Venue::all();

    // Pass the $venues variable to the view
    return view('venues.create', compact('venues'));
}

    

public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'required|string',
        // Other validation rules
    ]);

    // Create and save the venue
    Venue::create($request->all());

    return redirect()->route('venues.index')
        ->with('success', 'Venue created successfully.');
}


public function search(Request $request)
{
    $query = $request->input('query');
    $venues = Venue::where('name', 'like', "%$query%")->get();

    return view('venues.search', compact('venues'));
}
public function edit(Venue $venue)
    {
        return view('venues.edit', compact('venue'));
    }
    public function show($id)
    {
        $venue = Venue::find($id);
        if (!$venue) {
            return abort(404); // Artist not found
        }
        return view('venues.show', compact('venue'));
    }

    public function update(Request $request, Venue $venue)
    {
        // Validate and update the venue
    }

    public function destroy(Venue $venue)
    {
        // Delete the venue
    }

}
