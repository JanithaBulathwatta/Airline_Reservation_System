<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flighttransaction extends Model
{
    use HasFactory;
    protected $primarykey = 'id';
    protected $fillable = [
        'seatNumber','date','fare','passenger_id','flightmaster_id','aircraft_id'
    ];

    public function passenges(){
        return $this->belongsTo('app\Models\Passenge','passenger_id','id');
    }

    public function flightmasters(){
        return $this->belongsTo('app\Models\Flightmaster','flightmaster_id','id');
    }

    public function aircraft(){
        return $this->belongsTo('app\Models\Aircraft','aircraft_id','id');
    }
}
