<?php

namespace gestion_academica\Http\Controllers;

use Illuminate\Http\Request;
use gestion_academica\User;
use DB;

class DocentesController extends Controller
{
    public function listado_docentes(){
    //presenta un listado de usuarios paginados de 50 en 50
  		$usuarios = DB::table('users')
    		->join('docentes', 'users.id', '=', 'docentes.id_docentes_user')
    		->paginate(50);
    
    	//Consultar roles de los user
  		$roles = DB::table('users')->join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id', '=', 'role_user.role_id')->paginate(50);
  		return View("listados.listado_docentes")->with("usuarios",$usuarios)->with("roles",$roles);
	}

	//Buscar docente por el cedula
	public function buscar_docente(Request $request){
  		$dato=$request->input("dato_buscado");
  		$usuarios = DB::table('users')
    		->join('docentes', 'users.id', '=', 'docentes.id_docentes_user')
    		->where("docentes.cedula_docentes","like","%".$dato."%")
    		->paginate(50);

    	//Consultar roles de los user
    	$roles = DB::table('users')->join('role_user','users.id','=','role_user.user_id')->join('roles','roles.id', '=', 'role_user.role_id')->paginate(50);
  	
		return view("listados.listado_docentes")->with("usuarios",$usuarios)->with("roles",$roles);
    }

    public function nombreDocenteActivo ($user)
    {
      $usuarios = DB::table('users')
                    ->join('docentes', 'users.id', '=', 'docentes.id_docentes_user')
                    ->where("docentes.cedula_docentes","like","%".$user."%");
      return $usuarios;
    }
}
