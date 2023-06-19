<?php

namespace App\Domain\User\Handler;

use App\Domain\User\Repositories\UserRepositories;
use Illuminate\Http\Request;

class UserHandler{

    public $ur;

    public function __construct()
    {
        $this->ur = new UserRepositories();
    }

    public function insertUser(Request $req){
        $this->ur->insertUser($req);
    }

    public function login(Request $req){
        return $this->ur->login($req);
    }

    public function logout(){
        $this->ur->logout();
    }

    public function updateProfile(Request $req, $id){
        $this->ur->updateProfile($req, $id);
    }

    public function updateAccount(Request $req, $id){
        $this->ur->updateAccount($req, $id);
    }
}
