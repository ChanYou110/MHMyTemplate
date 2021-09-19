<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function ornaments()
    {
        return $this->belongsToMany('App\Ornamnet', 'ornament_post', 'post_id', 'ornament_id');
    }
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'post_skill', 'post_id', 'skill_id');
    }
}
