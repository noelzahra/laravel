<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //incomplete method add scope to name

    public function scopeIncomplete($query) {
        return $query->where('complete', 0);
    }
}
