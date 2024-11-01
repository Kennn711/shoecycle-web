<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    function shoes()
    {
        return $this->belongsTo(Shoes::class, 'shoes_id');
    }
}
