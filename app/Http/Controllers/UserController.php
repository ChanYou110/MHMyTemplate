<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    function getLoginUser(User $user){
        $user = Auth::user();
        // dd($user);
        return $user;
    }
    function getUser(User $user){
        $user->post;
        return $user;
    }
}
