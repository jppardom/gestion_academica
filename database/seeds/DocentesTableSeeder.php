<?php

use Illuminate\Database\Seeder;
use gestion_academica\User;
use gestion_academica\Docentes;

class DocentesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = User::where('usuario', '1010101010')->get(['id'])->first();
        Docentes::create([
            'id_docentes_user' => $users->id,
        	'cedula_docentes' => '1010101010',
            'nombres_docentes' => 'ITSMS',
            'apellido_docentes' => 'Administrador',
            'fnacimiento_docentes' => '25/10/2017',
            'sexo_docentes' => 'Masculino',
            'provincia_docentes' => 'Loja',
            'canton_docentes' => 'Calvas',
            'ciudad_docentes' => 'Cariamanga',
            'direccion_docentes' => 'Velasco Ibarra y 14 de Octubre',
            'referencias_docentes' => 'S/R',
            'celular_docentes' => '0900000000',
            'fijo_docentes' => '072688230',
            'email_docentes' => 'plaravelinstituto@gmail.com',
            'tipo_sangre_docentes' => 'RH',
            'titulo_docentes' => 'Titulo',
            'especialidad_docentes' => 'S/E',
            'estado_docentes' => '1',
        ]);
    }
}
