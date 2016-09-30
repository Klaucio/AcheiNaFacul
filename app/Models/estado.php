<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    //

    protected $fillable=['designacao'];
    public $timestamps=false;

    public function artigos()
    {
        return $this->belongsToMany(artigo::class);
    }
}
