<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//models
use App\Models\Movie;

class MovieController extends Controller
{
    /* 
        R-read 
    */
    
    public function index()
    {

        //recupero tutti gli elementi di questo dato 
        //con questo comando sto eseguendo il comando sql select * from movies
        $movies = Movie::all();

        //dd($movies);

        return view('movies.index', compact('movies'));
    }

    public function show($id)
    {
        //recupera ogni singolo movie
        //select * from movies where id = $id poi first mi esgue la query e mi restituisce solo il primo elemento 
        $movie = Movie::where('id', $id)->first();

        return view('movies.show', compact('movie'));
    }
}
