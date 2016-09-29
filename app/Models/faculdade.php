<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class faculdade extends Model
{
    //
    protected $fillable=['designacao','abreviatura'];
    public $timestamps=false;

    public function departamentos(){
        return $this->hasMany(departamento::class);
    }

}
