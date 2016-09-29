<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artigo extends Model
{
    //
    protected $fillable=['nr_utente','tipo','nome','regime','sala','telefone',''];
    public $timestamps=false;

    public function projectos(){
        return $this->belongsTo(projecto::class);
    }
    public function membros(){
        return $this->hasMany(membro::class);
    }


}
