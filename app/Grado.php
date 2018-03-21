<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    protected $table = 'grado';

    protected $fillable = ['nombre', 'profesor_id'];

    public function profesor(){
        return $this->belongsTo('App\Profesor');
    }
}
