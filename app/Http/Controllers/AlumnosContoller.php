<?php

namespace gestion_academica\Http\Controllers;

use Illuminate\Http\Request;
use DB;


class AlumnosContoller extends Controller
{
    public function listado_alumnos(){
        //presenta un listado de usuarios paginados de 50 en 50
        $usuariosAlumnos = DB::table('users')
            ->join('alumnos', 'users.id', '=', 'alumnos.id_alumnos_user')
            ->paginate(50);
        return View("listados.listado_alumnos")->with("usuariosAlumnos",$usuariosAlumnos);
    }
}
