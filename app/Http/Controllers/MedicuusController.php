<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: GupoBecm
 * Date: 16/02/2016
 * Time: 02:35 PM
 */
class MedicuusController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

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
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }
    public function log()
    {
        return view('auth/login2');
    }

}
