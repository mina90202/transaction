<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
     public function branches() {
        return $this->hasMany('App\Model\Branch');
    }
}
