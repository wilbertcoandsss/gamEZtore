<?php

namespace App\Domain\Game\Repositories;

use App\Domain\Game\Factories\GameFactories;
use App\Domain\Genre\Factories\GenreFactories;
use App\Models\Game;
use App\Models\Genre;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GameRepositories
{
    public function indexGames(Request $req)
    {

        $search = $req->search;

        if (Auth::user()) {
            $dob = Auth::user()->dob;
            $age = Carbon::parse($dob)->age;
            $games = Game::where('pegi_rating', '<=', "$age")->where('title', 'LIKE', "$search%")->paginate(10)->appends(['search' => $search]);
        } else {
            $games = Game::where('title', 'LIKE', "$search%")->paginate(10)->appends(['search' => $search]);
        }

        return ['games' => $games];
    }

    public function searchGame(Request $req)
    {
        $search = $req->search;
        $games = Game::where('title', 'LIKE', "$search%")->paginate(10)->appends(['search' => $search]);
        return ['games' => $games];
    }

    public function detailPage($id)
    {
        $games = Game::where('id', $id)->get();

        $genre = Genre::all();

        return ['games' => $games, 'genre' => $genre];
    }

    public function insertGame(Request $req)
    {
        $genref = new GenreFactories();
        $gamef = new GameFactories();
        $new_genre = $req->input('genre');

        if ($req->new_genre != null) {
            $new_genre = $genref->insertNewGenre($req);
        }

        $photo = $req->file('photo');

        $res = Genre::where('genre', 'LIKE', "$new_genre")->first();

        $extension = $photo->getClientOriginalExtension();
        $fileName = str_replace(' ', '', $req->title) . '.' . $extension;

        Storage::putFileAs('public/games/', $photo, $fileName);

        $gamef->insertGame($req, $fileName, $res);
    }

    public function updateGame(Request $req, $id){
        $genref = new GenreFactories();
        $gamef = new GameFactories();
        $new_genre = $req->input('genre');

        if ($req->new_genre != null) {
            $new_genre = $genref->insertNewGenre($req);
        }

        $s = Game::find($id);

        $res = Genre::where('genre', 'LIKE', "$new_genre")->first();

        if($s->pic != NULL){

            Storage::delete('public/games/'.$s->pic);

            $photo = $req->file('photo');


            $extension = $photo->getClientOriginalExtension();
            $fileName = str_replace(' ', '', $req->title) . '.' . $extension;

            Storage::putFileAs('public/games/', $photo, $fileName);

            Game::where('id', $req->id)->update([
                'pic' => $fileName
            ]);
        }

        Game::where('id', $req->id)->update([
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

    public function getAllGames(){
        return ['games' => Game::all()];
    }

    public function getGame($id){
        return ['games' => Game::find($id)];
    }

    public function deleteGame($id){
        $s = Game::find($id);

        Storage::delete('public/games/'.$s->pic);

        Game::where('id', $id)->delete();
    }
}
