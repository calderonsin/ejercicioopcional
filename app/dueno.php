<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dueno extends Model
{
    protected $guarded = [];

    public function carro()
    {
        return $this->hasOne('App\carro');
    }



}
