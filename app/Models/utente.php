<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class utente extends Model
{
    //
    protected $fillable=['id','tipo','nome','regime','sala','telefone','curso_id','local_trabalho_id'];
    public $timestamps=false;

    public function curso(){
        return $this->belongsTo(curso::class);
    }
    public function local(){
        return $this->belongsTo(local_trabalho::class);
    }
    public function receptor(){
        return $this->hasOne(receptor::class);
    }
    public function user(){
        return $this->hasOne(User::class);
    }

}
