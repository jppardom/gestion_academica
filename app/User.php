<?php

namespace gestion_academica;
use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable 
{
    use Notifiable;
    use ShinobiTrait;

    /**
     * The attributes that are mass assignable.1
     * @var array
     */
    protected $fillable = [
        'usuario', 'email',  'password', 'avatar', 'confirmation_code',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


     //Relación entre Alumnos 
    public function alumnos  (){
        return $this->hasMany('gestion_academica\Alumno');
    }
    public function docentes  (){
        return $this->hasMany(Docentes::class, 'id_docentes_user');
    }

    public function permisos(){
        return $this->hasMany('\Caffeinated\Shinobi\Models\Role', 'id');
    }

    public function permisosRol(){
        return $this->hasMany('\gestion_academica\RolesUser', 'id');
    }

    
}
