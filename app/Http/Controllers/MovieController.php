<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {

        $movies = Movie::with('actors', 'genre')->get();
        return response()->json($movies);

    }

    public function show($id)
    {
        //$movie = Movie::find($id);

        //return response()->json($movie);

        $movie = Movie::with('actors', 'genre')->find($id);
        if (!$movie) {
            return response()->json(['error' => 'Movie not found.'], 404);
        }
        return response()->json($movie);

        
    }

    public function store(Request $request)
    {
        $movie = new Movie;
        $movie->fill($request->all());
        $movie->save();

        return response()->json($movie, 201);
    }

    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        $movie->fill($request->all());
        $movie->save();

        return response()->json($movie);
    }

    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();

        return response()->json([], 204);
    }
}
