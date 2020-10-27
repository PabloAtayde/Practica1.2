<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentarios extends Model
{
    public function personas(){
        return $this->belongsto('App\Usuarios');
    }
    public function publicaciones(){
        return $this->belongsto('App\Publicaciones');
    }
}
