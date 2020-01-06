<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function venue()
    {
        return $this->belongsTo(MasterVenue::class);
    }
}
