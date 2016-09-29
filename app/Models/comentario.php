<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentario extends Model
{
    //
    protected $fillable=['comentario','artigo_id'];
    public $timestamps=false;

    public function artigo(){
        return $this->belongsTo(artigo::class);
    }

}
