<?php

namespace App;

use App\Models\artigo;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return array
     */
    public function roles()
    {
        return $this->belongsToMany(User::class);
    }
    public function artigos()
    {
        return $this->hasMany(artigo::class);
    }
//    public $timestamps=false;


}
