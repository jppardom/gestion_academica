<?php

namespace gestion_academica;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = "materia";
     //Relación entre One To Many
    public function alumnos_materia(){
    	return $this->hasMany('gestion_academica\Alumnos_Materia');
    }

    //Relación entre One To Many
    public function alumnos(){
    	return $this->hasMany('gestion_academica\Alumnos');
    }
}
