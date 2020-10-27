<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public function publicaciones(){
        return $this->hasmany('App\Publicaciones');

    }
    public function comentarios(){
        return $this->hasmany('App\Comentarios');
    }
    public function personas(){
        return $this->belongsto('App\Personas');
    }
}
