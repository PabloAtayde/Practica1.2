<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Usuarios extends Authenticatable
{
    use HasApiTokens,Notifiable;
    public function publicaciones(){
        return $this->hasmany('App\Publicaciones');

    }
    public function comentarios(){
        return $this->hasmany('App\Comentarios');
    }
    public function personas(){
        return $this->belongsto('App\Personas');
    }
    public function roles(){
        return $this->belongsto('App\Roles');
    }
}
