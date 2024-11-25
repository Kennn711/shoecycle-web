<?php

namespace App\Models;

use App\Http\Controllers\SessionController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    const STATUS_PENDING = "pending";

    static function code()
    {
        return 'SYC-' . rand(10000, 99999);
    }

    function transactiondetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    function wallet()
    {
        return $this->belongsTo(Wallet::class);
    }
}
