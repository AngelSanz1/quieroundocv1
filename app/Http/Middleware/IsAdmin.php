<?php namespace App\Http\Middleware;

use App\Doctor;
use App\Documento;
use App\DocumentType;
use App\Models\Administrador;
use App\Models\Usuario;
use Closure;
use Illuminate\Auth\Guard;

class IsAdmin extends IsType{

	public function __construct(Guard $auth){
		$this->auth=$auth;

	}

	public function getType(){
		return 'admin';
	}
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
			$admin=$result=\DB::table('administrador')
				->where('id', '=', $this->auth->user()->id)
				->get();
		if($admin == null)
		{

			return redirect()->to('auth/home');

		}
		else{
			return $next($request);

		}

	}

}
