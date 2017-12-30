<?php

namespace gestion_academica;

use Illuminate\Database\Eloquent\Model;

class Docentes_Materia extends Model
{
    protected $table = "docentes_materia";

     //Relación entre One To Many (Inverse) 
    public function perido_academico(){
    	return $this->belongsTo('gestion_academica\Periodo_academico');
    }
    //Relación entre One To Many (Inverse) 
    public function materia(){
    	return $this->belongsTo('gestion_academica\Materia');
    }

      //Relación entre One To Many
    public function docentes(){
    	return $this->hasMany('gestion_academica\Docentes');
    }
}


