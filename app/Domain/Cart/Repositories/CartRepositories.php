<?php

namespace App\Domain\Cart\Repositories;

use App\Domain\Cart\Factories\CartFactories;
use App\Models\Cart;
use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartRepositories{
    public function addGameToCart(Request $req, $id){
        $result = Game::find($id);

        $sessionresult = Session::put('sesresult', $result);
        $qty = 1;

        $check = Cart::where('game_id', '=', "$result->id")->where('user_id', '=', Auth::user()->id)->first();

        if ($check == NULL) {
            $cf = new CartFactories();
            $cf->addCart($qty);
        } else {
            $incrementQty = $check->qty + $qty;
            Cart::where('game_id', Session::get('sesresult')->id)->update([
                'qty' => $incrementQty
            ]);
        }
    }

    public function getUserCart(){
        $cart = Cart::where('user_id', '=', Auth::user()->id)->get();
        return ['cart' => $cart];
    }

    public function updateQty(Request $req, $id){
        Cart::where('id', $id)->update([
            'qty' => $req->qty
        ]);

        Session::put('sesresultupdate', $req->qty);
    }

    public function deleteCart($id){
        Cart::where('id', $id)->delete();
    }

    public function checkOut(){
        $count = Cart::where('user_id', Auth::user()->id)->count();
        return $count;
    }

    public function deleteUserCart(){
        Cart::where('user_id', Auth::user()->id)->delete();
    }
}
