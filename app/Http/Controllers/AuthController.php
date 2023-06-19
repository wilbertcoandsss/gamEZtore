<?php

namespace App\Http\Controllers;

use App\Domain\User\Handler\UserHandler;
use App\Models\Cart;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    //
    public $uh, $cc;

    public function __construct()
    {
        $this->uh = new UserHandler();
        $this->cc = new CartController();
    }

    public function index(){
        return view('home');
    }

    public function registerPage(){
        return view('registration');
    }

    public function register(Request $req){
        $rules = [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'gender' => 'required',
            'dob' => 'required|date|before:-13 years'
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $this->uh->insertUser($req);

        return redirect('/');
    }

    public function loginPage(){
        return view('login');
    }

    public function login(Request $req){
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];

        $validator = Validator::make($req->all(), $rules);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        return $this->uh->login($req);
    }

    public function logout(){
        $this->cc->deleteUserCart();
        $this->uh->logout();
        return redirect('/');
    }
}
