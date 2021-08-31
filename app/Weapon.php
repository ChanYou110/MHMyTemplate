<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weapon extends Model
{
    public $timestamps = false;
    
    public function weaponType()
    {
        return $this->belongsTo('App\WeaponType', 'weapon_types_id');
    }
}
