<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        $movies = Movie::all();
        foreach($movies as $movie) {
            $movie->storyline = substr($movie->storyline, 0, 100);
        }
        return view('movies', compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:100|string',
            'genre' => 'required|min:3|max:100|string',
            'director' => 'required|min:3|max:100|string',
            'director' => 'required|min:3|max:100|string',
            'year' => 'required|digits:4|integer|min:1900',
            'storyline' => 'required|min:50|max:5000|string'
        ]);

        $movie = new Movie();
        $movie->name = $request->name;
        $movie->genre = $request->genre;
        $movie->director = $request->director;
        $movie->year = $request->year;
        $movie->storyline = $request->storyline;

        $movie->save();

        return redirect('movies/' . $movie->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Movie::find($id);
        return view('movie', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
