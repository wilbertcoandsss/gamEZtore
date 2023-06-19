<?php

namespace App\Domain\Transaction\Repositories;

use App\Domain\Transaction\Factories\TransactionHeaderFactories;
use App\Models\TransactionHeader;
use Illuminate\Support\Facades\Auth;

class TransactionHeaderRepositories{
    public function checkOut($count){
        $thf = new TransactionHeaderFactories();
        $thf->insertTrHeader($count);
    }

    public function getLatestData(){
        return TransactionHeader::latest()->first();
    }

    public function getTrHeaderUser(){
        $trHistory = TransactionHeader::where('user_id', Auth::user()->id)->get();
        return ['trhistory' => $trHistory];
    }

    public function findTrHeader($id){
        $thDetail = TransactionHeader::find($id);
        return ['thdetail' => $thDetail];
    }
}
