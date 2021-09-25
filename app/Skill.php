<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //create_at, update_atを使用しない。
    public $timestamps = false;
    
    public function posts()
    {
        return $this->belongsToMany('App\Post', 'post_skill', 'skill_id', 'post_id')->withPivot('level');
    }
    public function charms()
    {
        return $this->hasMany('App\Charm');
    }
}