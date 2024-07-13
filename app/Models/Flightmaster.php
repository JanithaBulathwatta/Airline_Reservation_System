<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flightmaster extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = [
        'departureCity','arrivalCity','departureTime','arrivalTime'
    ];
}