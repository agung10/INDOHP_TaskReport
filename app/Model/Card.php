<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function activity()
    {
        return $this->belongsTo('App\Model\Activity');
    }

    public function tasks()
    {
        return $this->hasMany('App\Model\Task');
    }
}
