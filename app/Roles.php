<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    public function Usuarios(){
        return $this->hasone('App\Usuarios');
    }
}
