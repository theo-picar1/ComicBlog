<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function create() 
    {
        return view('comics.create');
    }

    public function about() {
        return view('layouts.about');
    }

    public function contact() {
        return view('layouts.contact');
    }
}
