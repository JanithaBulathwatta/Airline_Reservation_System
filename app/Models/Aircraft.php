<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $primarykey = 'id';
    protected $fillable = [
        'aircraft_num','model','capacity','company'
    ];

    public function flighttransactions()
    {
        return $this->hasMany('app\Models\Flighttransaction','aircraft_id');
    }
}
