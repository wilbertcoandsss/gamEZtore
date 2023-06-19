<?php

namespace App\Domain\User\Repositories;

use App\Domain\User\Factories\UserFactories;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class UserRepositories{
    public function insertUser(Request $req){
        $uf = new UserFactories();
        $uf->insertUser($req);
    }

    public function login(Request $req){
        $credentials = [
            'email' => $req->email,
            'password' => $req->password
        ];

        if($req->remember){
            Cookie::queue('mycookie', $req->email, 10080);
        }

        if(Auth::attempt($credentials)){
            return redirect('/');
        }

        return back()->withErrors([
            'notmatch' => 'Your credentials are invalid',
        ]);
    }

    public function logout(){
        Auth::logout();
        Session::flush();
    }

    public function updateProfile(Request $req, $id){
        if ($req->hasFile('photo')) {
            $user = User::where('id', $id)->first();

            if (Auth::user()->profilepic != null) {
                Storage::delete('public/' . $user->profilepic);
            }

            $file = $req->file('photo');

            $extension = $file->getClientOriginalExtension();

            $fileName = time() . '.' . $extension;
            Storage::putFileAs('public/', $file, $fileName);

            User::where('id', $req->id)->update([
                'profilepic' => $fileName
            ]);
        }
        User::where('id', $req->id)->update([
            'name' => $req->name,
            'email' => $req->email
        ]);
    }

    public function updateAccount(Request $req, $id){
        User::where('id', $req->id)->update([
            'password' => bcrypt($req->new_pw),
        ]);
    }
}
