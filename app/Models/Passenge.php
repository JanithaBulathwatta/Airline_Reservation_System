<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenge extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = [
        'name','age','gender','mobile'
    ];

    public function flighttransactions(){
        return $this->hasMany('app\Models\Flighttransaction','passenger_id');
    }
}
