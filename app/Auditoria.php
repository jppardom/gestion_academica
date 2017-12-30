<?php

namespace gestion_academica;

use Illuminate\Database\Eloquent\Model;

class Auditoria extends Model
{
    protected $table = "auditoria";
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_usuario','accion','descripcion'
    ];
}
