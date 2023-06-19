<?php

namespace App\Http\Controllers;

use App\Domain\User\Handler\UserHandler;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use PDO;

class UserController extends Controller
{
    //
    public $uh;

    public function __construct()
    {
        $this->uh = new UserHandler();
    }

    public function profilePage()
    {
        return view('profile');
    }

    public function updateProfile(Request $req, $id)
    {
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'photo' => 'required|mimes:jpg,jpeg,png'
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        $this->uh->updateProfile($req, $id);

        return redirect('/profilePage')->with('message', 'Profile updated succesfully!');
    }

    public function updateAccount(Request $req, $id)
    {
        $rules = [
            'confirm_pw' => 'required|same:new_pw',
            'old_pw' => 'required',
            'new_pw' => 'required'
        ];


        $data = $req->all();

        $user = User::find($id);

        if (!Hash::check($data['old_pw'], $user->password)) {
            return back()->withErrors([
                'old_pw' => 'Old password didnt match',
            ]);
        }

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()) {

            return back()->withErrors($validator);
        }

        $this->uh->updateAccount($req, $id);

        return redirect('/profilePage')->with('message', 'Account updated succesfully!');
    }
}
