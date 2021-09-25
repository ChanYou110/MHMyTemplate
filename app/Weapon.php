<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    //create_at, update_atを使用しない。
    public $timestamps = false;
    
    //リレーション
    public function weaponType()
    {
        return $this->belongsTo('App\WeaponType', 'weapon_types_id');
    }
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
