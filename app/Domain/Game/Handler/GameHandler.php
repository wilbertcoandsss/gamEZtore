<?php

namespace App\Domain\Game\Handler;

use App\Domain\Game\Repositories\GameRepositories;
use App\Models\Game;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameHandler
{
    public $gr;

    public function __construct()
    {
        $this->gr = new GameRepositories();
    }
    public function indexGames(Request $req)
    {
        return $this->gr->indexGames($req);
    }

    public function searchGame(Request $req)
    {
        return $this->gr->searchGame($req);
    }

    public function detailPage($id)
    {
        return $this->gr->detailPage($id);
    }

    public function insertGame(Request $req)
    {
        return $this->gr->insertGame($req);
    }

    public function getAllGames()
    {
        return $this->gr->getAllGames();
    }

    public function getGame($id)
    {
        return $this->gr->getGame($id);
    }

    public function updateGame(Request $req, $id)
    {
        return $this->gr->updateGame($req, $id);
    }

    public function deleteGame($id)
    {
        return $this->gr->deleteGame($id);
    }
}
