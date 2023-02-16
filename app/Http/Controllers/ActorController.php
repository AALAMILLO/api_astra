<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::all();

        return response()->json($actors);
    }

    public function show($id)
    {
        $actor = Actor::find($id);

        return response()->json($actor);
    }

    public function store(Request $request)
    {
        $actor = new Actor;
        $actor->fill($request->all());
        $actor->save();

        return response()->json($actor, 201);
    }

    public function update(Request $request, $id)
    {
        $actor = Actor::find($id);
        $actor->fill($request->all());
        $actor->save();

        return response()->json($actor);
    }

    public function destroy($id)
    {
        $actor = Actor::find($id);
        $actor->delete();

        return response()->json([], 204);
    }
}

