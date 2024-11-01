<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }

    function shoes()
    {
        return $this->belongsTo(Shoes::class);
    }

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
