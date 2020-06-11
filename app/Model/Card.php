<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function activity(){
        return $this->belongsTo(Activity::class, "activity_id");
    }
}
