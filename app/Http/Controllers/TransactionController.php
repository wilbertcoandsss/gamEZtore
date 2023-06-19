<?php

namespace App\Http\Controllers;

use App\Domain\Transaction\Handler\TransactionDetailHandler;
use App\Domain\Transaction\Handler\TransactionHeaderHandler;
use App\Models\TransactionDetail;
use App\Models\TransactionHeader;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public $thh, $thd;

    public function __construct()
    {
        $this->thh = new TransactionHeaderHandler();
        $this->thd = new TransactionDetailHandler();
    }
    public function transactionHistoryPage()
    {
        return view('transactionhistory', $this->thh->getTrHeaderUser());
    }

    public function transactionDetailPage($id){
        return view('transactiondetail', $this->thd->getTrDetailById($id), $this->thh->findTrHeader($id));
    }

    public function checkOut($count){
        $this->thh->checkOut($count);
        $this->thd->checkOut($count);
    }
}
