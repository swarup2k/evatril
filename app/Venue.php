<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    public function merchant()
    {
        return $this->belongsTo(Merchant::class);
    }

    public function getAmenitiesAttribute($value)
    {
        return json_decode($value);
    }
}
