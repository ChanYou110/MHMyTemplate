<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostSkill extends Pivot
{
    use SoftDeletes;
    
    protected $table = 'post_skill';
}
