<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index() {
        // Fetch all comics from the database
        $comics = Comic::all();

        return view('index', compact('comics'));
    }
    public function show($id) {
        $comic = Comic::with('comments.user')->findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    public function create() {
        return view('comics.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required|string|max:150',
            'imageURL' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'description' => 'required|string'
        ]);

        $imagePath = $request->file('imageURL')->store('comics', 'public');

        Comic::create([
            'title' => $request->title,
            'description' => $request->description,
            'comment_count' => 0,
            'image_path' => $imagePath
        ]);

        return redirect()->route('comics.index')->with('success', 'Comic post added successfully!');
    }
}
