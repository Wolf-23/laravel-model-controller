<?php

namespace App\Http\Controllers;
use App\Movie;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('homepage', compact('movies'));
    }

    public function best() {
        $bestMovie = Movie::orderBy('vote', 'desc')->get();
        return view('best', compact('bestMovie'));
    }

    public function news() {
        return view('news');
    }

}
