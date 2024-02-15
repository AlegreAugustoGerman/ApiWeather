<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forecast extends Model
{
    use HasFactory;


    public function station()
{
    return $this->belongsTo(Station::class);
}

    public function apidata()
{
    return $this->belongsTo(apidata::class);
}
}
