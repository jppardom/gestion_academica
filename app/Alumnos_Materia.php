<?php

namespace gestion_academica;

use Illuminate\Database\Eloquent\Model;

class Alumnos_Materia extends Model
{
    protected $table = "alumnos_materia";

    //Relación entre One To Many
    public function alumnos(){
    	return $this->hasMany('gestion_academica\Alumnos');
    }

    //Relación entre One To Many (Inverse) 
    public function periodo_academico(){
    	return $this->belongsTo('gestion_academica\Periodo_Academico');
    }

    //Relación entre One To Many (Inverse) 
    public function materia(){
    	return $this->belongsTo('gestion_academica\Materia');
    }

}
