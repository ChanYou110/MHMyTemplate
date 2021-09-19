<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charm extends Model
{
    //create_at, update_atを使用しない。
    public $timestamps = false;
    
    //id以外が保存されるようにする。
    protected $guarded = ['id'];
}
