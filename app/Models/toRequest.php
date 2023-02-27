<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class toRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'tin',
        'name',
        'position',
        'salary',
        'division',
        'departure_date',
        'arrival_date',
        'official_station',
        'destination',
        'purpose_of_travel',
        'per_diems',
        'to_type'
    ];
}
