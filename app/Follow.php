<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = ['follower_user_id', 'follow_user_id'];
    
    public function followerUser()
    {
        return $this->belongsTo('App\User', 'follower_user_id');
    }
    public function followUser()
    {
        return $this->belongsTo('App\User', 'follow_user_id');
    }
}
