<?php namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: GupoBecm
 * Date: 16/02/2016
 * Time: 02:35 PM
 */
class DoctorController extends Controller {

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
        return view('medicos');
    }

    public function account(){
        return view('account');
    }

    public function registrodoc()
    {
        return view('auth.registerdoc');
    }
    public function store($id){

        $rules = array(
            'id_usuario'=>$id,
            'escuela' =>'required',
            'email'=>'required|email|unique:usuario',
            'cedula'=>'required|cedula|unique:medico',
            'titulo_profesional'=>'required',
            'internado'=>'required',
            'servicio_social'=>'required',
            'cursos' =>'',
            'otro' =>'',
            'experiencia' =>'',

            //	'password_confirmation' => 'required|min:6'
        );
        //dd($rules);
        $this->validate($request, $rules);
        /*$v=Validator::make($data, $rules);
        if($v->fails())
        {
            return redirect()->back()
                ->withErrors($v->errors())
                ->withInput(Request::except('password'));
        }

        */

        $doctor =Doctor::create($request->all()	);

        return  'Insertado.';
    }
}
