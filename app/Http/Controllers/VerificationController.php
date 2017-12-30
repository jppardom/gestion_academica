<?php

namespace gestion_academica\Http\Controllers;

use Illuminate\Http\Request;
use gestion_academica\User;
use gestion_academica\Auditoria;
use gestion_academica\Alumno;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\Redirect;

class VerificationController extends Controller
{
    //respuesta a verificación de cuenta de alumnos 
    public function verify($code){
    	$user = User::where('confirmation_code', $code)->first();

    	if(!$user){
    		return redirect('/');
    	}
        $this->createPermiso($code);
        $this->auditoriaCrearAlumno($code);
    	$user->confirmed = true;
    	$user->confirmation_code = null;
    	$user->save();
        return Redirect('/login');
    }

     //permisos alumnos 
    protected function createPermiso($code)
    {
    
        
        $users = User::where('confirmation_code', $code)->get(['id'])->first();
        $rol=Role::where('slug', 'alumno')->get(['id'])->first();     
        $usuario=User::find($users->id);
        $usuario->assignRole($rol->id);
        $rolesasignados=$usuario->getRoles(); 
        return json_encode ($rolesasignados);  
    }

    //Guardar auditoria guardar docente
    public function auditoriaCrearAlumno ($code)
    {
        $users = User::where('confirmation_code', $code)->get(['id'])->first();
        $alumno = Alumno::where('id_alumnos_user', $users->id)->get(['nombres_alumnos', 'apellidos_alumnos'])->first();
        return Auditoria::create([
            'id_usuario' => $users->id,
            'accion' => 'Guardar datos del alumno',
            'descripcion' => 'El usuario '.$alumno->nombres_alumnos.' '.$alumno->apellidos_alumnos. ' se registo al sistema de matriculación de la ITSMS',
        ]);
    }
}
