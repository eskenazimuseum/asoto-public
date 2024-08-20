<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function timelines($id) {
        $artist = Artist::all();
        $current_artist = Artist::findOrFail($id);
        $timeline = $current_artist->timelines;

        return view('artists.index', compact('current_artist', timeline));
    }

    public function index() {
    	$artistsOrdered = DB::table('artists')->orderBy('alphasort', 'asc')->get();

        $artistsAlphabetical = array();
        
        foreach($artistsOrdered as $artist) {
            $name = $artist->alphasort;
            $current_letter = substr(Str::slug($name), 0, 1);
            $artistsAlphabetical[$current_letter][] = $artist;
        }

    	return view('artists.index', ['artistsAlphabetical' => $artistsAlphabetical]);
    }

    public function create() {
    	return view('artists.create');
    }

    public function store(Request $request) {

    	$request->validate([
    		'name' => 'required',
    		'life_dates' => 'required',
    		'active_locations' => 'required'
    	]);

    	Artist::create($request->all());

    	return redirect('artists')->with('status', 'Artist added successfully!');
    }

    public function show(Artist $artist) {
        $relationships = Artist::find($artist->id)->relationships;
    	return view('artists.show', compact('relationships', 'artist'));
    }

    public function edit(Artist $artist) {
    	return view('artists.edit', compact('artist'));
    }

    public function update(Request $request, Artist $artist) {
    	$request->validate([
    		'name' => 'required',
    		'life_dates' => 'required',
    		'active_locations' => 'required'
    	]);

    	$artist->update($request->all());

    	return redirect()->route('artists.index')->with('success', 'Artist updated successfully!');
    }

    public function destroy(Artist $artist) {
    	$artist->delete();

    	return redirect()->route('artists.index')->with('success', 'Artist removed successfully.');
    }

    public function timeline($id) {
        $timelines = Artist::find($id)->timelines;
        $artist = Artist::find($id);
        $url = action([ArtistController::class, 'timeline'], ['id' => $id]);
        return view('artists.timeline', compact('timelines', 'artist'));
    }

    public function artworks($id) {
        $artworksUnsorted = Artist::find($id)->artworks;
        $artworks = $artworksUnsorted->sortBy('date', SORT_REGULAR);
        $artist = Artist::find($id);
        $url = action([ArtistController::class, 'artworks'], ['id' => $id]);
        return view('artists.works', compact('artworks', 'artist'));
    }
}
