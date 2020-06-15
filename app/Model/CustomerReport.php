<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CustomerReport extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
