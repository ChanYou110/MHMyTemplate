<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    
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
    
    function like(Post $post){
        if(!$post->getLikeCheckAttribute()){
            $like = Like::create([
                                'post_id'=>$post->id,
                                'user_id'=>Auth::id()
                                ]);
        }
    }
    function deleteLike(Post $post){
        if($post->getLikeCheckAttribute()){
            $like = Like::where('post_id', $post->id)->where('user_id', Auth::id())->first();
            $like->delete();
        }
    }
    
    function lanking(Post $post){
        return $post = Post::withCount('likes')
                            ->orderBy('likes_count', 'desc')
                            ->with('weapon', 'head_equipment', 'chest_equipment', 'arm_equipment',
                                'waist_equipment', 'leg_equipment', 'charm.skill1', 'charm.skill2',
                                'user', 'skills', 'ornaments', 'likes')
                            ->get();
    }
    
    function likeIndex(Post $post){
        return $post = Post::select('posts.*')
                            ->join('likes', 'likes.post_id', '=', 'posts.id')
                            ->where('likes.user_id', Auth::id())
                            ->orderBy('likes.created_at', 'desc')
                            ->with('weapon', 'head_equipment', 'chest_equipment', 'arm_equipment',
                                'waist_equipment', 'leg_equipment', 'charm.skill1', 'charm.skill2',
                                'user', 'skills', 'ornaments', 'likes')
                            ->get();
    }
    function timeline(Post $post){
        return $post = Post::select('posts.*')
                            ->join('follows', 'follows.follower_user_id', '=', 'posts.user_id')
                            ->where('follows.follow_user_id', Auth::id())
                            ->orderBy('posts.created_at', 'desc')
                            ->with('weapon', 'head_equipment', 'chest_equipment', 'arm_equipment',
                                'waist_equipment', 'leg_equipment', 'charm.skill1', 'charm.skill2',
                                'user', 'skills', 'ornaments', 'likes')
                            ->get();
    }
}
