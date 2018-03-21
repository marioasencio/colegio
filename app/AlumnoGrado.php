<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlumnoGrado extends Model
{
    protected $table = 'alumno_grado';

    protected $fillable = ['alumno_id', 'grado_id', 'seccion'];
}
