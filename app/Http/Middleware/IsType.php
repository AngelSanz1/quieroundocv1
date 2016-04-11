<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Guard;
use Illuminate\Session\Store;

abstract class IsType{
    public function __construct(Guard $auth, Store $session){
        $this->auth=$auth;
        $this->sesssion=$session;

    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    abstract public function getType();



    public function handle($request, Closure $next)
    {

        if( ! $this->auth->user()->is($this->getType()))
        {
            if ($request->ajax())
            {
                return response('Unauthorized.', 401);
            }
            else
            {
                return redirect()->to('auth/home');
            }
        }
        return $next($request);
    }

}
