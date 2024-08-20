<?php

namespace App\Http\Controllers;
use App\Models\Author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function essay($id) {
        $author = Author::all();
        $current_author = Author::findOrFail($id);
        $essays = $current_author->essays;

        return view('authors.index', compact('current_artist', 'essays'));
    }

    public function index() {
        $authors = Author::latest()->paginate(10);

        return view('authors.index', ['authors' => $authors]);
    }

    public function create() {
        return view('authors.create');
    }

    public function store(Request $request) {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'display_name' => 'required'
        ]);

        Author::create($request->all());

        return redirect('authors')->with('status', 'Author added successfully!');
    }

    public function show(Author $author) {
        return view('authors.show', compact('author'));
    }

    public function edit(Author $author) {
        return view('authors.edit', compact('author'));
    }

    public function update(Request $request, Author $author) {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'display_name' => 'required'
        ]);

        $author->update($request->all());

        return redirect()->route('authors.index')->with('success', 'Author updated successfully!');
    }

    public function destroy(Author $author) {
        $author->delete();

        return redirect()->route('authors.index')->with('success', 'Author removed successfully.');
    }

    public function author($id) {
        $essays = Author::find($id)->essays;
        $url = action([AuthorController::class, 'essay'], ['id' => $id]);
        return view('authors.essays', compact('essays'));
    }
}
