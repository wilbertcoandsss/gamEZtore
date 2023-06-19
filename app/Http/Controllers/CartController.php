<?php

namespace App\Http\Controllers;

use App\Domain\Cart\Handler\CartHandler;
use App\Models\Cart;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    //
    public $ch, $thc;

    public function __construct()
    {
        $this->ch = new CartHandler();
        $this->thc = new TransactionController();
    }

    public function addGameToCart(Request $req, $id)
    {
        if (!Auth::check()) {
            return view('login');
        } else {
            $this->ch->addGameToCart($req, $id);
            return redirect('/')->with('message', 'Product added to cart succesfully!');
        }
    }

    public function cartPage(){
        return view('cartpage', $this->ch->getUserCart());
    }

    public function updateQty(Request $req, $id){
        $this->ch->updateQty($req, $id);
        return redirect('cartPage')->with('message', 'Game Quantity Updated!');
    }

    public function deleteCart($id){
        $this->ch->deleteCart($id);
        return redirect('cartPage')->with('message', 'Cart Deleted!');
    }

    public function checkOut(){

        $count = $this->ch->checkOut();
        $this->thc->checkOut($count);

        return redirect('cartPage/')->with('message', 'Checkout success!');
    }

    public function deleteUserCart(){
        $this->ch->deleteUserCart();
    }

}
