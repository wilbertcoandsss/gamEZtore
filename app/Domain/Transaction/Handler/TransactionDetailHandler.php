<?php

namespace App\Domain\Transaction\Handler;

use App\Domain\Transaction\Repositories\TransactionDetailRepositories;

class TransactionDetailHandler{

    public $tdr;

    public function __construct()
    {
        $this->tdr = new TransactionDetailRepositories();
    }

    public function checkOut($count){
        $this->tdr->checkOut($count);
    }

    public function getTrDetailById($id){
        return $this->tdr->getTrDetailById($id);
    }
}
