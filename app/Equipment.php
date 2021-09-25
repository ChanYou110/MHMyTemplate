<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
