<?php

namespace App\Domain\Game\Factories;

use App\Models\Game;
use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GameFactories
{
    public function insertGame(Request $req, $fileName, $res)
    {
        Game::insert([
            'title' => $req->title,
            'pegi_rating' => $req->pegi,
            'description' => $req->desc,
            'price' => $req->price,
            'pic' => $fileName,
            'genre_id' => $res->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
