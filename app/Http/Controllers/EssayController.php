<?php

namespace App\Http\Controllers;
use App\Models\Essay;
use App\Models\Author;

use Illuminate\Http\Request;

class EssayController extends Controller
{
    public function index() {
        $essays = Essay::latest()->paginate(10);

        return view('essays.index', ['essays' => $essays]);
    }

    public function create() {
        $authors = Author::all();
        return view('essays.create', compact('authors'));
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'preview' => 'required'
        ]);

        $author = Author::findOrFail($request['author']);
        
        $essay = new Essay();
        $essay->title = $request['title'];
        $essay->subtitle = $request['subtitle'];
        $essay->preview = $request['preview'];
        $essay->cite_mla = $request['cite_mla'];
        $essay->cite_chicago = $request['cite_chicago'];
        $essay->body = $request['body'];
        $essay->bibliography = $request['bibliography'];

        $author->essays()->save($essay);

        return redirect('essays')->with('status', 'New essay added successfully!');
    }

    public function show(Essay $essay) {
        return view('essays.show', compact('essay'));
    }

    public function edit(Essay $essay) {
        $authors = Author::all();
        return view('essays.edit', compact('essay', 'authors'));
    }

    public function update(Request $request, Essay $essay) {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'preview' => 'required'
        ]);

        $essay->update($request->all());

        return redirect()->route('essays.index')->with('success', 'Essay updated successfully!');
    }

    public function destroy(Essay $essay) {
        $essay->delete();

        return redirect()->route('essays.index')->with('success', 'Essay removed successfully.');
    }

    public function editList() {
        $essays = Essay::latest()->paginate(10);

        return view('essays.editList', ['essays' => $essays]);
    }
}
