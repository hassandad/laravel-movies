<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Film extends Model
{
    protected $fillable = ['title','description','user_id'];
    
    
}
