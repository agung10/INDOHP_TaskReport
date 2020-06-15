<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public function customerReports()
    {
        return $this->hasMany(CustomerReport::class);
    }
}
