<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'movieCount' => Movie::count(),
            'genreCount'=> Genre::count(),
        ]);
    }

}
