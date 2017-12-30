<?php

use Illuminate\Database\Seeder;
use gestion_academica\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $user = User::create([
            'usuario' => '1010101010',
            'email' => 'plaravelinstituto@gmail.com',
            'password' => bcrypt('1010101010'),
            'confirmation_code'=> str_random(25),
        ]);
        $user->confirmed = true;
        $user->confirmation_code = null;
    	$user->save();

    }
}
