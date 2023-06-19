<?php

namespace App\Domain\Cart\Factories;

use App\Models\Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartFactories{
    public function addCart($qty){
        Cart::insert([
            'user_id' => Auth::user()->id,
            'game_id' => Session::get('sesresult')->id,
            'qty' => $qty,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
