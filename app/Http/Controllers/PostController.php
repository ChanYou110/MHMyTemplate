<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Charm;
use App\User;
use App\Like;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    function index(Post $post){
        return $post = Post::with('weapon', 'head_equipment', 'chest_equipment', 'arm_equipment',
                                'waist_equipment', 'leg_equipment', 'charm.skill1', 'charm.skill2',
                                'user', 'skills', 'ornaments', 'likes')->get();
    }
    function show(Post $post){
        $post->weapon;
        $post->head_equipment;
        $post->chest_equipment;
        $post->arm_equipment;
        $post->waist_equipment;
        $post->leg_equipment;
        $post->charms;
        $post->skills;
        $post->ornaments;
        $post->user;
        $post->charm->skill1;
        $post->charm->skill2;
        // dd($post);
        return $post;
    }
    function getMyPost(User $user_id, Post $post){
        // dd($user_id);
        return $post = Post::where('user_id', $user_id->id)->orderBy('posts.created_at','desc')->with('weapon', 'head_equipment', 'chest_equipment', 'arm_equipment',
                                'waist_equipment', 'leg_equipment', 'charm.skill1', 'charm.skill2',
                                'user', 'skills', 'ornaments')->get();
    }
    
    function delete(Post $post){
        $post->delete();
    }
    
    function update(Request $request, Post $post){
        $charm_inputs = $request['charmForm'];
        $skill_inputs = $request['skillForm'];
        $ornament_inputs = $request['ornamentForm'];
        $post_inputs = $request['postForm'];
        
        $post->fill($charm_inputs)->save();
        $post->fill($skill_inputs)->save();
        $post->fill($ornament_inputs)->save();
        $post->fill($post_inputs)->save();
    }
    
    function search(Request $request){
        
        $search_data = [];
        if($request->weapon_id)
        {
            $search_data['weapon_id'] = $request->weapon_id;
        }
        if($request->head_equipment_id)
        {
            $search_data['head_equipment_id'] = $request->head_equipment_id;
        }
        if($request->chest_equipment_id)
        {
            $search_data['chest_equipment_id'] = $request->chest_equipment_id;
        }
        if($request->arm_equipment_id)
        {
            $search_data['arm_equipment_id'] = $request->arm_equipment_id;
        }if($request->waist_equipment_id)
        {
            $search_data['waist_equipment_id'] = $request->waist_equipment_id;
        }
        if($request->leg_equipment_id)
        {
            $search_data['leg_equipment_id'] = $request->leg_equipment_id;
        }
        $results = Post::where($search_data)->with('weapon', 'head_equipment', 'chest_equipment', 'arm_equipment',
                                'waist_equipment', 'leg_equipment', 'charm.skill1', 'charm.skill2',
                                'user', 'skills', 'ornaments')->get();
        // dd($results);
        return $results;
    }
    
    function store(Request $request){
        //$request?????????????????????
        // dd($request);
        
        //$charm_inputs???request??????????????????charmForm?????????????????????
        $charm_inputs = $request['charmForm'];
        //$skill_inputs???request??????????????????skillForm?????????????????????
        $skill_inputs = $request['skillForm'];
        //$ornament_inputs???request??????????????????ornamentForm?????????????????????
        $ornament_inputs = $request['ornamentForm'];
        //$post_inputs???request??????????????????postForm?????????????????????
        $post_inputs = $request['postForm'];
        
        //DB???????????????????????????????????????????????????????????????????????????????????????(???????????????????????????????????????????????????)???
        DB::transaction(function() use($charm_inputs, $skill_inputs, $ornament_inputs, $post_inputs){
            //???????????????????????????????????????????????????
            $charm = Charm::create($charm_inputs);
            //charm_id???user_id???$request['postForm']????????????????????????????????????$post_inputs??????????????????DB???????????????
            $post_inputs['charm_id'] = $charm->id;
            $post_inputs['user_id'] = auth()->user()->id;
            $post = Post::create($post_inputs);
            
            //??????????????????????????????
            $post->skills()->attach($skill_inputs);
            $post->ornaments()->attach($ornament_inputs);
        });
    }
    
    function like(Post $post){
        $like = $post->like($post);
    }
    function deleteLike(Post $post){
        $deleteLike = $post->deleteLike($post);
    }
    
    function lanking(Post $post){
        $lanking = $post->lanking($post);
        return $lanking;
    }
    
    function likeIndex(Post $post){
        $likeIndex = $post->likeIndex($post);
        return $likeIndex;
    }
    function timeline(Post $post){
        $timeline = $post->timeline($post);
        return $timeline;
    }
}
