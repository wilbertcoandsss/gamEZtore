<?php

namespace App\Domain\Genre\Handler;

use App\Domain\Genre\Repositories\GenreRepositories;
use Illuminate\Http\Request;

class GenreHandler{
    public $gr;

    public function __construct()
    {
        $this->gr = new GenreRepositories();
    }
    public function getAllGenre(){
        return $this->gr->getAllGenres();
    }

    public function getGenre($id){
        return $this->gr->getGenre($id);
    }

    public function updateGenre(Request $req, $id){
        return $this->gr->updateGenre($req, $id);
    }
}
