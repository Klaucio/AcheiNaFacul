<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    //
    protected $fillable=['designacao'];
    public $timestamps=false;

    public function artigos(){
        return $this->hasMany(artigo::class);
    }

}
