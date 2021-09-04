<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Weapon;

class WeaponController extends Controller
{
    public function index(Weapon $weapon){
        return $weapon->get();
    }
}
