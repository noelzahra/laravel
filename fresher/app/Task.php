<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['name'];
    
    //Not needed as by default implicit model binding is on the id
    //Setting the getRouteKeyName ovverides it to another col
    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
