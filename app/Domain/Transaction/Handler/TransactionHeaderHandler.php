<?php

namespace App\Domain\Transaction\Handler;

use App\Domain\Transaction\Repositories\TransactionHeaderRepositories;

class TransactionHeaderHandler{
    public $thr;

    public function __construct()
    {
        $this->thr = new TransactionHeaderRepositories();
    }

    public function checkOut($count){
        $this->thr->checkOut($count);
    }

    public function getTrHeaderUser(){
        return $this->thr->getTrHeaderUser();
    }

    public function findTrHeader($id){
        return $this->thr->findTrHeader($id);
    }
}
