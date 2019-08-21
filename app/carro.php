<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carro extends Model
{
    protected $guarded = [];
    public function dueno()
    {
        return $this->belongsTo('App\dueno');
    }
}
