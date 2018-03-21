<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    protected $table = 'profesor';

    protected $fillable = ['nombre','apellidos','genero'];

    public function grados(){
        return $this->hasMany('App\Grado');
    }
}
