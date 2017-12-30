<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrador',
            'slug' => 'administrador',
            'description' => 'Administrador del sistema de matriculación del Instituto Tecnológico Superior Mariano Samaniego',
        ]);

        Role::create([
            'name' => 'Docente',
            'slug' => 'docente',
            'description' => 'Docente encargado de realizar la siguiente tarea en el sistema subir notas y asistencias de lo alumnos',
        ]);

         Role::create([
            'name' => 'Alumno',
            'slug' => 'alumno',
            'description' => 'Alumnos solo puede matricularse',
        ]);
    }
}
