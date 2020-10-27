<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publicaciones extends Model
{
    public function usuarios(){
        return $this->belongsto('App\Usuarios');
    }
    public function comentarios(){
        return $this->hasmany('App\Comentarios');
    }
}
