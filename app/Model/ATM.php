<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ATM extends Model
{
    
     public function branch() {
        return $this->belongsTo('App\Model\Branch');
    }
}
