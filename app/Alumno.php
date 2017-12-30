<?php

namespace gestion_academica;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = "alumnos";
    

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_alumnos_user','cedula_alumnos', 'nombres_alumnos', 'apellidos_alumnos',
        'fnacimiento_alumnos', 'sexo_alumnos', 'provincia_alumnos',
        'canton_alumnos', 'ciudad_alumnos', 'direccion_alumnos',
        'referencias_alumnos', 'celular_alumnos', 'fijo_alumnos',
        'email_alumnos', 'tipo_sangre_alumnos','colegio_alumnos'
    ];

    //Relación entre user 
    public function user ()
    {
        return $this->hasMany('gestion_academica\Users');
    }

    //Relación entre One To Many (Inverse) 
    public function alumnos_mareria(){
    	return $this->belongsTo('gestion_academica\Alumnos_Materia');
    }


}
