<?php

namespace App\Domain\Genre\Repositories;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreRepositories
{
    public function getAllGenres()
    {
        return ['genre' => Genre::all()];
    }
    public function getGenre($id)
    {
        return ['genre' => Genre::find($id)];
    }
    public function updateGenre(Request $req, $id){
        Genre::where('id', $req->id)->update([
            'genre' => $req->genre,
        ]);
    }
}
