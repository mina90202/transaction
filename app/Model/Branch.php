<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    public function area() {
        return $this->belongsTo('App\Model\Area');
    }

     public function atms() {
        return $this->hasMany('App\Model\ATM');
    }

}
