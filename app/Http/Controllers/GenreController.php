<?php

namespace App\Http\Controllers;

use App\Domain\Game\Handler\GameHandler;
use App\Domain\Genre\Handler\GenreHandler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    //
    public $gh;
    public $genreh;

    public function __construct()
    {
        $this->gh = new GameHandler();
        $this->genreh = new GenreHandler();
    }

    public function manageGameGenrePage()
    {
        return view('gamegenrepage', $this->genreh->getAllGenre());
    }

    public function updateGameGenrePage($id)
    {
        return view('updateGameGenrePage', $this->genreh->getGenre($id));
    }

    public function updateGameGenre(Request $req, $id)
    {
        $rules = [
            'genre' => 'unique:genres,genre'
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $this->genreh->updateGenre($req, $id);

        return redirect('/manageGameGenrePage')->with('message', 'Game genre updated succesfully!');
    }
}
