<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('movies', 'App\Http\Controllers\MovieController@index');
Route::get('movies/{id}', 'App\Http\Controllers\MovieController@show');
Route::post('movies', 'App\Http\Controllers\MovieController@store');
Route::put('movies/{id}', 'App\Http\Controllers\MovieController@update');
Route::delete('movies/{id}', 'App\Http\Controllers\MovieController@destroy');

Route::get('actors', 'App\Http\Controllers\ActorController@index');
Route::get('actors/{id}', 'App\Http\Controllers\ActorController@show');
Route::post('actors', 'App\Http\Controllers\ActorController@store');
Route::put('actors/{id}', 'App\Http\Controllers\ActorController@update');
Route::delete('actors/{id}', 'App\Http\Controllers\ActorController@destroy');

Route::get('genres', 'App\Http\Controllers\GenreController@index');
Route::get('genres/{id}', 'App\Http\Controllers\GenreController@show');
Route::post('genres', 'App\Http\Controllers\GenreController@store');
Route::put('genres/{id}', 'App\Http\Controllers\GenreController@update');
Route::delete('genres/{id}', 'App\Http\Controllers\GenreController@destroy');

