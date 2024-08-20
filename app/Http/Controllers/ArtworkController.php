<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Artwork;
use App\Models\Artist;

class ArtworkController extends Controller
{
    public function index() {
    	$artworksOrdered = Artwork::with('artist')->orderBy('primary_title', 'asc')->get();

        $artworksAlphabetical = array();
        
        foreach($artworksOrdered as $artwork) {
            $current_letter = substr(Str::slug($artwork->primary_title), 0, 1);
            $artworksAlphabetical[$current_letter][] = $artwork;
        }

        return view('artworks.index', ['artworksAlphabetical' => $artworksAlphabetical]);
    }

    public function create() {
        $artists = Artist::all();
    	return view('artworks.create', compact('artists'));
    }

    public function store(Request $request) {
    	$request->validate([
    		'primary_title' => 'required',
    		'credit_line' => 'required',
    		'home_institution' => 'required',
    		'institution_link' => 'required'
    	]);

        $artist = Artist::findOrFail($request['artist_id']);

        $input = $request->all();
        if ($image = $request->file('image_path')) {
            $imageDestinationPath = 'img/artworks/';
            $artworkImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $artworkImage);
            $input['image_path'] = $artworkImage;
        }

        $artwork = new Artwork();
        $artwork->primary_title = $input['primary_title'];
        $artwork->credit_line = $input['credit_line'];
        $artwork->home_institution = $input['home_institution'];
        $artwork->institution_link = $input['institution_link'];
        $artwork->image_path = $input['image_path'];
        $artwork->alternate_titles = $input['alternate_titles'];

        $artist->artworks()->save($artwork);

        // Artwork::create($input);

    	return redirect()->route('artworks.index')->with('success', 'Artwork added successfully!');
    }

    public function show(Artwork $artwork) {
    	return view('artworks.show', compact('artwork'));
    }

    public function edit(Artwork $artwork) {
    	return view('artworks.edit', compact('artwork'));
    }

    public function update(Request $request, Artwork $artwork) {
    	$request->validate([
    		'primary_title' => 'required',
    		'credit_line' => 'required',
    		'home_institution' => 'required',
    		'institution_link' => 'required'
    	]);

        $input = $request->all();

        if ($image = $request->file('image_path')) {
            $imageDestinationPath = 'img/artworks/';
            $artworkImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($imageDestinationPath, $artworkImage);
            $input['image_path'] = $artworkImage;
        }

    	$artwork->update($input);

    	return redirect()->route('artworks.index')->with('success', 'Artwork updated successfully!');
    }

    public function destroy(Artwork $artwork) {
    	$artwork->delete();

    	return redirect()->route('artists.index')->with('success', 'Artwork removed successfully.');
    }
}
