<?php

use Illuminate\Database\Seeder;
use gestion_academica\User;
use Caffeinated\Shinobi\Models\Role;

class RolesAsignarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rol=Role::where('slug', 'administrador')->get(['id'])->first();     
        $usuario=User::find(1);
        $usuario->assignRole($rol->id);
        $rolesasignados=$usuario->getRoles(); 
        return json_encode ($rolesasignados);  
    }
}
