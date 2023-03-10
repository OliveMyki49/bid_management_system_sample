<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidMng extends Model
{
    use HasFactory;

    protected $table = 'bid_mng';

    protected $fillable = [
        'company',
        'address',
        'bid',
    ];
}
