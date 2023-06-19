<?php

namespace App\Domain\Transaction\Factories;

use App\Models\TransactionHeader;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class TransactionHeaderFactories{
    public function insertTrHeader($count){
        TransactionHeader::insert([
            'user_id' => Auth::user()->id,
            'tr_date' => Carbon::now(),
            'total_item' => $count,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
