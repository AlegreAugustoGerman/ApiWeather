<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apidata extends Model
{
    use HasFactory;


    public function forecast()
    {
        return $this->hasOne(Forecast::class);
    }
}




