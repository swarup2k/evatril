<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    public function getFromTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format("H:i A");
    }

    public function getToTimeAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format("H:i A");
    }
}
