<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artigo extends Model
{
    //
    protected $fillable=['tipo','designacao','descricao','foto','local_achado',
                        'descricao_local','user_id','categoria_id','receptor_id'];
    public $timestamps=false;

    public function users(){
        return $this->belongsTo(projecto::class);
    }

    public function receptor(){
        return $this->belongsTo(receptor::class);
    }

    public function comentario(){
        return $this->hasMany(comentario::class);
    }
    public function categoria(){
        return $this->belongsTo(categoria::class);
    }

    public function estados()
    {
        return $this->belongsToMany(estado::class);
    }


}
