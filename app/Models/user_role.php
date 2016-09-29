<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_role extends Model
{
    //
    protected $fillable=['user_id','role_id'];

    public $timestamps=false;
}
