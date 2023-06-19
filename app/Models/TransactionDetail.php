<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;
    public function transactionheader()
    {
        return $this->belongsTo(TransactionHeader::class);
    }
    public function games()
    {
        return $this->belongsTo(Game::class, 'game_id');
    }

}
