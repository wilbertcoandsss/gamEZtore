<?php

namespace App\Domain\Cart\Handler;

use App\Domain\Cart\Repositories\CartRepositories;
use Illuminate\Http\Request;

class CartHandler{

    public $cr;

    public function __construct()
    {
        $this->cr = new CartRepositories();
    }

    public function addGameToCart(Request $req, $id){
        $this->cr->addGameToCart($req, $id);
    }

    public function getUserCart(){
        return $this->cr->getUserCart();
    }

    public function updateQty(Request $req, $id){
        $this->cr->updateQty($req, $id);
    }

    public function deleteCart($id){
        $this->cr->deleteCart($id);
    }

    public function checkOut(){
        return $this->cr->checkout();
    }

    public function deleteUserCart(){
        $this->cr->deleteUserCart();
    }
}
