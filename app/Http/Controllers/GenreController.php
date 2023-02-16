<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return response()->json($genres);
    }

    public function show($id)
    {
        $genre = Genre::find($id);

        return response()->json($genre);
    }

    public function store(Request $request)
    {
        $genre = new Genre;
        $genre->fill($request->all());
        $genre->save();

        return response()->json($genre, 201);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        $genre->fill($request->all());
        $genre->save();

        return response()->json($genre);
    }

    public function destroy($id)
    {
        $genre = Genre::find($id);
        $genre->delete();

        return response()->json([], 204);
    }
}
