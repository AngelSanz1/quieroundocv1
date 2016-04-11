<?php

use SocialNorm\Exceptions\ApplicationRejectedException;
use SocialNorm\Exceptions\InvalidAuthorizationCodeException;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('account', function(){
	return view('account');
});

//Route::get('home', 'HomeController@index');

Route::get('users', 'UserController@index');

Route::get('doctores', 'DoctorController@index');

Route::get('pacientes', 'PacienteController@index');

Route::get('conocenos', 'ConocenosController@index');

Route::get('registro', 'DoctorController@registrodoc');

Route::get('formulario', 'StorageController@index');

Route::post('storage/create', 'StorageController@save');

Route::get('fotografia/{id}','SavePhotoController@index');

Route::post('storage/photo_upload','SavePhotoController@save');
Route::get('log/nutricion', 'MedicuusController@log');

Route::get('storage/delete/{id}/{archivo}/{id2}', function ($id,$archivo, $id2) {
	$public_path = public_path();
	\Storage::disk('local')->delete('/'.$id.'/'.$archivo);
	//header_register_callback(true);
	return redirect()->route('admin.doctors.edit', $id2);
});

Route::get('storage/{id}/{archivo}', function ($archivo) {
	$public_path = public_path();
	$url = $public_path.'/storage/id/'.$archivo;
	//verificamos si el archivo existe y lo retornamos
	if (Storage::exists($archivo))
	{
		return response()->download($url);
	}
	//si no se encuentra lanzamos un error 404.
	abort(404);

});



Route::group(['middleware' => ['auth']], function (){

	Route::get('auth/authorize/{provider}',  function($provider) {
		return \AdamWathan\EloquentOAuth\Facades\OAuth::authorize($provider);
	});
	Route::get('auth/login/{provider}',  function($provider) {
		try {
			\AdamWathan\EloquentOAuth\Facades\OAuth::login($provider, function($user,$userDetails) {
				//dd($userDetails);
			});
		} catch (ApplicationRejectedException $e) {
			// User rejected application
			//dd('error1');
		} catch (InvalidAuthorizationCodeException $e) {
			// Authorization was attempted with invalid
			// code,likely forgery attempt
			//print_r($provider);
			//dd($e);
		}

		// Current user is now available via Auth facade
		$user = Auth::user();
		dd($user);

		return $user;
	});
});



Route::get('google/logins', function() {
	try {
		SocialAuth::login('google',function($user, $userDetails){

		});

	} catch (ApplicationRejectedException $e) {
		// User rejected application
	} catch (InvalidAuthorizationCodeException $e) {
		// Authorization was attempted with invalid
		// code,likely forgery attempt
		dd('dsfdsf');

	}

	// Current user is now available via Auth facade

	return 'done';
});


Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

Route::get('home', array('as' => 'home', 'uses' => function(){
	return view('home');
}));







Route::controllers([
	'users'=>'UsersController',
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

/*Route::get('examples', function(){
    $user ='Cuadrado';
    return view('examples.template', compact('user'));
});*/

Route::group(['prefix'=>'admin', 'middleware' => ['auth', 'is_admin'], 'namespace'=>'Admin'], function(){

    Route::resource('users', 'UsersController');
	Route::resource('doctors', 'DoctorsController');
	Route::resource('documents', 'DocumentController');
	Route::resource('home', 'AdministradorController');
	//Route::resource('')
});



// API routes...
Route::get('/api/v1/users/{id?}', ['middleware' => 'auth.basic', function($id = null) {
	if ($id == null) {
		$usuarios = App\User::all(array('id', 'nombre', 'apellido', 'remember_token', 'sexo'));
		return Response::json(array(
			'error' => false,
			'info' => $usuarios,
			'status_code' => 200
		));
	} else {
		$usuarios = App\User::find($id, array('email', 'nombre', 'apellido', 'fecha_nacimiento', 'remember_token', 'sexo', 'telefono'));
		return Response::json(array(
			'tipo_usuario'=>'1',
			'info' => $usuarios
		));
	}

}]);

Route::get('/api/v1/categories/{id?}', ['middleware' => 'auth.basic', function($id = null) {
	if ($id == null) {
		$categories = App\Category::all(array('id', 'name'));
	} else {
		$categories = App\Category::find($id, array('id', 'name'));
	}
	return Response::json(array(
		'error' => false,
		'user' => $categories,
		'status_code' => 200
	));
}]);


Route::post('/new', 'Auth\RegController@__construct');

Route::post('/new', 'Auth\RegController@__construct');
