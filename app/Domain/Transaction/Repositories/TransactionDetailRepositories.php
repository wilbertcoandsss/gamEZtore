<?php

namespace App\Domain\Transaction\Repositories;

use App\Domain\Transaction\Factories\TransactionDetailFactories;
use App\Models\Cart;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Support\Facades\Auth;

class TransactionDetailRepositories
{
    public function checkOut($count)
    {
        $tdf = new TransactionDetailFactories();

        $game = Cart::where('user_id', Auth::user()->id)->get();
        $array = array();

        for ($i = 0; $i < $count; $i++) {
            $array[] = array(
                'game_id' => $game[$i]->game_id,
                'qty' => $game[$i]->qty
            );
        }

        $tdf->insertTd($count, $game);

        Cart::where('user_id', Auth::user()->id)->truncate();
    }

    public function getTrDetailById($id)
    {
        $trDetail = TransactionDetail::where('transaction_header_id', $id)->get();
        return ['trdetail' => $trDetail];
    }
}
