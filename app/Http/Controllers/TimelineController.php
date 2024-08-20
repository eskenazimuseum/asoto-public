<?php

namespace App\Http\Controllers;
use App\Models\Artist;
use App\Models\Timeline;

use Illuminate\Http\Request;

class TimelineController extends Controller
{

    public function create() {
        $artists = Artist::all();
        return view('timelines.create', compact('artists'));
    }

    public function store(Request $request) {
        $request->validate([
            'order' => 'required',
            'date' => 'required',
            'text' => 'required'
        ]);

        $artist = Artist::findOrFail($request['artist']);
        
        $timeline = new Timeline();
        $timeline->order = $request['order'];
        $timeline->date = $request['date'];
        $timeline->text = $request['text'];

        $artist->timelines()->save($timeline);

        return redirect('artists')->with('status', 'Artist timeline added successfully!');
    }

    public function show(Timeline $timeline) {
        return view('timelines.show', compact('timeline'));
    }

    public function edit(Timeline $timeline) {
        return view('timelines.edit', compact('timeline'));
    }

    public function update(Request $request, Timeline $artist) {
        $request->validate([
            'order' => 'required',
            'date' => 'required',
            'text' => 'required'
        ]);

        $timeline->update($request->all());

        return redirect()->route('artists.index')->with('success', 'Artist timeline updated successfully!');
    }

    public function destroy(Timeline $timeline) {
        $timeline->delete();

        return redirect()->route('artists.index')->with('success', 'Artist timeline removed successfully.');
    }
}
