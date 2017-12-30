<?php

namespace gestion_academica;

use Illuminate\Database\Eloquent\Model;

class Periodo_Academico extends Model
{
    protected $table = "periodo_academico";

    //Relación entre One To Many
    public function alumnos_materia(){
    	return $this->hasMany('gestion_academica\Alumnos_Materia');
    }

    //Relación entre One To Many
    public function docentes_materia(){
    	return $this->hasMany('gestion_academica\Docentes_Materia');
    }
}
