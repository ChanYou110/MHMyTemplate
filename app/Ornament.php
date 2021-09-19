<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ornament extends Model
{
     public function posts()
    {
        return $this->belongsToMany('App\Post', 'ornament_post', 'ornament_id', 'post_id');
    }
}
