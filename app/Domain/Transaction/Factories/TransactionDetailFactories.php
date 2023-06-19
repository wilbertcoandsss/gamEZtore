<?php

namespace App\Domain\Transaction\Factories;

use App\Models\Cart;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TransactionDetailFactories
{
    public function insertTd($count, $game)
    {
        $getLatestData = TransactionHeader::latest()->first();

        for ($i = 0; $i < $count; $i++) {
            TransactionDetail::insert([
                'transaction_header_id' => $getLatestData->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                'game_id' => $game[$i]->game_id,
                'qty' => $game[$i]->qty
            ]);
        }
    }
}
