<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //id以外が保存されるようにする。
    protected $guarded = ['id'];
    
    //リレーション
    public function ornaments()
    {
        return $this->belongsToMany('App\Ornament', 'ornament_post', 'post_id', 'ornament_id');
    }
    //リレーション
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'post_skill', 'post_id', 'skill_id');
    }
}
