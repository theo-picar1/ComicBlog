<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        // Fetch all comics from the database
        $comics = Comic::all();

        // Pass the comics data to the 'index' view
        return view('index', compact('comics'));
    }
}
