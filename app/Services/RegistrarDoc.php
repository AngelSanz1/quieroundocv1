<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class RegistrarDoc implements RegistrarContract {

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    public function validator(array $data)
    {
        return Validator::make($data, [
            'escuela' => 'required|max:100',
            'cedula'=>'required|max:20',
            'titulo_profesional' => 'required|max:200',
            'internado'=>'required',
            'servicio_social'=>'required|max:130',
            'cursos'=>'',
            'otro' => '',
            'experiencia' => '',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    public function create(array $data)
    {
        return User::create([
            'escuela' => $data['escuela'],
            'cedula'=>$data['cedula'],
            'titulo_profesional' => $data['titulo_profesional'],
            'internado'=>$data['internado'],
            'cursos'=>$data['cursos'],
            'otro'=>$data['otro'],
            'experiencia' => $data['experiencia'],
        ]);
        $data['verification_code']  = $user->verification_code;

        Mail::send('emails.welcome', $data, function($message) use ($data)
        {
            $message->from('no-reply@site.com', "Site name");
            $message->subject("Welcome to site name");
            $message->to($data['email']);
        });


        return $user;
    }

}
