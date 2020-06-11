<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }
    public function task(){
        return $this->belongsTo(Task::class, "task_id");
    }
}
