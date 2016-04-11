<?php namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Auth;
use Illuminate\Support\Facades\Validator;
use Socialite;

class AuthController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Registration & Login Controller
	|--------------------------------------------------------------------------
	|
	| This controller handles the registration of new users, as well as the
	| authentication of existing users. By default, this controller uses
	| a simple trait to add these behaviors. Why don't you explore it?
	|
	*/

	use AuthenticatesAndRegistersUsers;

	/**
	 * Create a new authentication controller instance.
	 *
	 * @param  \Illuminate\Contracts\Auth\Guard  $auth
	 * @param  \Illuminate\Contracts\Auth\Registrar  $registrar
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	protected function getFailedLoginMessage()
	{
		return trans('passwords.invalid_credentials');//nombre archivo: Password y despues del punto la llave
	}

	protected $redirectPath = '/home';

	/**
	 * Redirect the user to the Facebook authentication page.
	 *
	 * @return Response
	 */
	public function redirectToProvider()
	{
		return Socialite::driver('facebook')->redirect();

	}

	/**
	 * Obtain the user information from Facebook.
	 *
	 * @return Response
	 */
	public function handleProviderCallback()
	{
		try {
			$user = Socialite::driver('facebook')->user();
		} catch (Exception $e) {
			return redirect('auth/facebook');
		}

		$authUser = $this->findOrCreateUser($user);

		Auth::login($authUser, true);

		return redirect()->route('home');
	}

	/**
	 * Return user if exists; create and return if doesn't
	 *
	 * @param $facebookUser
	 * @return User
	 */
	private function findOrCreateUser($facebookUser)
	{
		$authUser = User::where('facebook_id', $facebookUser->id)->first();

		if ($authUser){
			return $authUser;
		}

		return User::create([
			'name' => $facebookUser->name,
			'email' => $facebookUser->email,
			'facebook_id' => $facebookUser->id,
			//'avatar' => $facebookUser->avatar
		]);
	}

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
