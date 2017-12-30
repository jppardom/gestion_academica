<?php

namespace gestion_academica\Http\Controllers\Auth;

use Illuminate\Http\Request;
use gestion_academica\User;
use gestion_academica\Alumno;
use Validator;
use gestion_academica\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Facades\Image as Image;
use  Illuminate\Support\Facades;
use Mail;
use Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usuario' => 'required|string|max:10|unique:users',
            'email' => 'required|email|max:255|unique:users',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
       
 
        $file =$data['file']; 
        $ext = $file->getClientOriginalExtension();
        $filename =$data['usuario']. '.'.$ext;
        $nombre = $file->getClientOriginalName();
        
        \Storage::disk('avatarUsers')->put($filename,  \File::get($file));

        
        $data['confirmation_code'] = str_random(50);
        $user = User::create([
            'usuario' => $data['usuario'],
            'email' => $data['email'],
            'password' => bcrypt($data['usuario']),
            'avatar' => '../storage/avatarUsers/'.$filename,
            'confirmation_code'=> $data['confirmation_code'],
        ]);
        
        $this->createAlumno($data);

        // Send confirmation code
        Mail::send('auth.emails.confirmation_code', $data, function($message) use ($data) {
            $message->to($data['email'], $data['nombres_alumnos'])->subject('Por favor confirma tu correo');
        });
        
    

    return $user;
    }

    //Funcióin para guardar datos en la tabla alumnos
    protected function createAlumno(array $data)
    {
        $users = User::where('usuario', $data['usuario'])->get(['id'])->first();
         $alumno=Alumno::create([
            'id_alumnos_user' => $users->id,
            'cedula_alumnos' => $data['usuario'],
            'nombres_alumnos' => $data['nombres_alumnos'],
            'apellidos_alumnos' => $data['apellidos_alumnos'],
            'fnacimiento_alumnos' => $data['fnacimiento_alumnos'],
            'sexo_alumnos' => $data['sexo_alumnos'],
            'provincia_alumnos' => $data['provincia_alumnos'],
            'canton_alumnos' => $data['canton_alumnos'],
            'ciudad_alumnos' => $data['ciudad_alumnos'],
            'direccion_alumnos' => $data['direccion_alumnos'],
           'referencias_alumnos' => $data['referencias_alumnos'],
            'celular_alumnos' => $data['celular_alumnos'],
            'fijo_alumnos' => $data['fijo_alumnos'],
            'email_alumnos' => $data['email_alumnos'],
            'tipo_sangre_alumnos' => $data['tipo_sangre_alumnos'],
            'colegio_alumnos' => $data['colegio_alumnos'],
        ]);
         return $alumno;
    } 
    

}
