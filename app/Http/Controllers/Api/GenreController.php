<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GenreRequest;
use App\Models\Genre;
use Illuminate\Http\Response;

class GenreController extends Controller
{
    public function index()
    {
        return Genre::all();
    }

    public function store(GenreRequest $request)
    {
        return Genre::create($request->all());
    }

    public function show(Genre $genre): Genre
    {
        return $genre;
    }

    public function update(GenreRequest $request, Genre $genre): Genre
    {
        return $genre->fill($request->all());
    }

    public function destroy(Genre $genre): Response
    {
        $genre->delete();
        return response()->noContent();
    }
}
