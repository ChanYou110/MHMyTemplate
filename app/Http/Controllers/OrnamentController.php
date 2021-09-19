<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ornament;

class OrnamentController extends Controller
{
    
    public function index(Ornament $ornament){
        return $ornament->get();
    }
}
