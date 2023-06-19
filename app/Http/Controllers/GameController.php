<?php

namespace App\Http\Controllers;

use App\Domain\Game\Handler\GameHandler;
use App\Domain\Genre\Handler\GenreHandler;
use App\Models\Cart;
use App\Models\Game;
use App\Models\Genre;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class GameController extends Controller
{
    //
    public $gh;
    public $genreh;

    public function __construct()
    {
        $this->gh = new GameHandler();
        $this->genreh = new GenreHandler();
    }

    public function index(Request $req)
    {
        return view('home', $this->gh->indexGames($req));
    }

    public function searchGame(Request $req)
    {

        return view('home', $this->gh->searchGame($req));
    }

    public function detailPage($id)
    {

        return view('gamedetails', $this->gh->detailPage($id));
    }

    public function manageGamePage()
    {
        return view('managegame', $this->gh->getAllGames());
    }

    public function insertGamePage()
    {
        return view('insertGamePage', $this->gh->getAllGames(), $this->genreh->getAllGenre());
    }

    public function insertGame(Request $req)
    {
        $rules = [
            'title' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png',
            'desc' => 'required',
            'price' => 'required|numeric|gte:0',
            'genre' => 'required|alpha_dash',
            'pegi' => 'required',
            'new_genre' => 'unique:genres,genre'
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $this->gh->insertGame($req);

        return redirect('/manageGamePage')->with('message', 'Game added succesfully!');
    }

    public function updateGamePage($id)
    {
        return view('updateGame', $this->gh->getGame($id), $this->genreh->getAllGenre());
    }

    public function updateGame(Request $req, $id)
    {
        $rules = [
            'title' => 'required',
            'photo' => 'required|mimes:jpg,jpeg,png',
            'desc' => 'required',
            'price' => 'required|numeric|gte:0',
            'genre' => 'required',
            'pegi' => 'required',
            'new_genre' => 'unique:genres,genre'
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $this->gh->updateGame($req, $id);

        return redirect('/manageGamePage')->with('message', 'Game updated succesfully!');
    }

    public function deleteGame($id)
    {
        $this->gh->deleteGame($id);
        return redirect('/manageGamePage')->with('message', 'Game deleted succesfully!');
    }
}
