<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function card(){
        return $this->belongsTo(Card::class, "task_id");
    }
}
