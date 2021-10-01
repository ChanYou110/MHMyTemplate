<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Follow;

class UserController extends Controller
{
    function getLoginUser(User $user){
        $user = Auth::user();
        // dd($user);
        return $user;
    }
    function getUser(User $user){
        $user->posts;
        $user->follows;
        $user->followers;
        return $user;
    }
    function follow(User $user){
        // dd($user->followers);
        if(!$user->getFollowerCheckAttribute()){
            $follow = Follow::create([
                                'follow_user_id'=>Auth::id(),
                                'follower_user_id'=>$user->id,
                                ]);
        }
    }
    function deleteFollow(User $user){
        if($user->getFollowerCheckAttribute()){
            $follow = Follow::where('follower_user_id', $user->id)->where('follow_user_id', Auth::id())->first();
            $follow->delete();
        }
    }
}
