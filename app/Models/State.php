<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Country;

class State extends Model
{
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
