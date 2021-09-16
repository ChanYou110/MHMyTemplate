<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Skill;

class SkillController extends Controller
{
    public function index(Skill $skill){
        return $skill->get();
    }
}
