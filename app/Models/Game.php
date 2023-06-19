<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    public function genre(){
        return $this->belongsTo(Genre::class);
    }

    public function cart(){
        return $this->hasMany(Cart::class);
    }

    public function transactiondetails(){
        return $this->hasMany(TransactionDetail::class, 'game_id');
    }
}
