<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeaponType extends Model
{
    public $timestamps = false;
    
    public function weapons()
    {
        return $this->hasMany('App\Weapon');
    }
}
