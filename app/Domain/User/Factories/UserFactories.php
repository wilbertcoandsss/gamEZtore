<?php

namespace App\Domain\User\Factories;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserFactories{
    public function insertUser(Request $req){
        User::insert([
            'name' => $req->name,
            'email' => $req->email,
            'password' => bcrypt($req->password),
            'gender' => $req->gender,
            'dob' => $req->dob,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
