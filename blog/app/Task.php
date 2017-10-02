<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // public static function incomplete()
    // {
    //     return self::where('completed', 0)->get();
    // }

    public static function complete()
    {
        return static::where('completed', 1)->get();
    }

    public function scopeIncomplete($query) //reference as Task::incompletedByQuery($val)
    {
        return $query->where('completed', 0);
    }
}
