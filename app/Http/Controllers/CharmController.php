<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charm;

class CharmController extends Controller
{
    function index(Charm $charm){
        // dd(Charm::find(11)->skill1);
        return $charm = Charm::with('skill1', 'skill2')->get();
    }
}
