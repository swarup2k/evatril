<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MasterVenue extends Model
{
    public function getBannerAttribute($banner)
    {
        return url(Storage::url($banner));
    }
}
