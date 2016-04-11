<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:100',
			'last_name'=>'required|max:100',
			'email' => 'required|email|max:255|unique:user',
			'date_birth'=>'required',
			'phone'=>'required|max:13',
			'gender'=>'required',
			'password' => 'required|confirmed|min:3',
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
			'name' => $data['name'],
			'last_name'=>$data['last_name'],
			'email' => $data['email'],
			'date_birth'=>$data['date_birth'],
			'phone'=>$data['phone'],
			'gender'=>$data['gender'],
			'password' => $data['password'],
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
