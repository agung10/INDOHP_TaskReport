<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function card()
    {
        return $this->belongsTo('App\Model\Card');
    }

    public function userTasks()
    {
        return $this->hasMany('App\Model\UserTask');
    }
}
