<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Address extends Model
{
    protected $fillable = ['user_id', 'country', 'zip'];

    public function user() {
        return $this->hasOne('App\User');
    }
}
