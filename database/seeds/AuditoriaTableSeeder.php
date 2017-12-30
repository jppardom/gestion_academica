<?php

use Illuminate\Database\Seeder;
use gestion_academica\Auditoria;
use gestion_academica\User;

class AuditoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('usuario', '1010101010')->get(['id'])->first();
        Auditoria::create([
            'id_usuario' => $users->id,
        	'accion' => 'Guardar datos del adminstrador ',
            'descripcion' => 'Datos de la cuenta Administrador principal para empezar a manipular el sistema',
        ]);
    }
}
