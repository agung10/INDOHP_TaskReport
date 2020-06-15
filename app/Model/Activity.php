<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    public function cards()
    {
        return $this->hasMany('App\Model\Card');
    }
}
