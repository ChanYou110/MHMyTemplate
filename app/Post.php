<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Post extends Model
{
    //id以外が保存されるようにする。
    protected $guarded = ['id'];
    
    //jsonに含めるアクセサ
    protected $appends = ['like_check', 'count'];
    
    //リレーション
    public function ornaments()
    {
        return $this->belongsToMany('App\Ornament', 'ornament_post', 'post_id', 'ornament_id')->withPivot('number');
    }
    public function skills()
    {
        return $this->belongsToMany('App\Skill', 'post_skill', 'post_id', 'skill_id')->withPivot('level');
    }
    public function weapon()
    {
        return $this->belongsTo('App\Weapon');
    }
    public function head_equipment()
    {
        return $this->belongsTo('App\Equipment', 'head_equipment_id');
    }
    public function chest_equipment()
    {
        return $this->belongsTo('App\Equipment', 'chest_equipment_id');
    }
    public function arm_equipment()
    {
        return $this->belongsTo('App\Equipment', 'arm_equipment_id');
    }
    public function waist_equipment()
    {
        return $this->belongsTo('App\Equipment', 'waist_equipment_id');
    }
    public function leg_equipment()
    {
        return $this->belongsTo('App\Equipment', 'leg_equipment_id');
    }
    public function charm()
    {
        return $this->belongsTo('App\Charm');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    
    public function getLikeCheckAttribute(){
        return $this->likes()->get()->contains('user_id', Auth::id());
    }
    
    public function getCountAttribute(){
        return $this->likes()->count();
    }
}
