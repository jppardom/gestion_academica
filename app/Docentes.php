<?php

namespace gestion_academica;

use Illuminate\Database\Eloquent\Model;

class Docentes extends Model
{
    protected $table = "docentes";

    protected $fillable = [
        'id_docentes_user','cedula_docentes', 'nombres_docentes', 'apellidos_docentes',
        'fnacimiento_docentes', 'sexo_docentes', 'provincia_docentes',
        'canton_docentes', 'ciudad_docentes', 'direccion_docentes',
        'referencias_docentes', 'celular_docentes', 'fijo_docentes',
        'email_docentes', 'tipo_sangre_docentes','colegio_docentes',
        'titulo_docentes', 'especialidad_docentes','estado_docentes'
    ];

     //Relación entre One To Many (Inverse) 
    public function docentes_materia(){
    	return $this->belongsTo('gestion_academica\Docentes_Materia');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id');
    }

}
