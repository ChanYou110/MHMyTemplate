<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrnamentPost extends Model
{
    use SoftDeletes;
    
    protected $table = 'ornament_post';
}
