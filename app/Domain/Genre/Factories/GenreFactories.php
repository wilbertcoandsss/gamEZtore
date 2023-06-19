<?php

namespace App\Domain\Genre\Factories;

use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GenreFactories{
    public function insertNewGenre(Request $req){
        Genre::insert([
            'genre' => $req->new_genre,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        $new_genre = $req->new_genre;
        return $new_genre;
    }
}
