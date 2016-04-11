<?php namespace App\Http\Controllers\Admin;

use App\Doctor;
use App\Documento;
use App\DocumentType;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use \Illuminate\Http\Request as Req;
use Illuminate\Routing\Redirector;

use Illuminate\Routing\Route;
use \Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class DocumentController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
        $this->beforeFilter('@findDoctor', ['only'=>[]]);
        $this->beforeFilter('@findDocument', ['only'=>['show', 'edit','destroy', 'update' ]]);
    }

    public function findDoctor(Route $route)
    {
        $this->user=Documento::findOrFail($route->getParameter('documents'));
        // $this->user=Doctor::findOrFail($route->getParameter('documents'));
    }

    public function findDocument(Route $route){
        $this->user=Documento::findOrFail($route->getParameter('documents'));
       // $this->user=Doctor::findOrFail($id);

    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    /*	protected $request;

        /*	public function __construct(Request $request)
         {
                $this->request=$request;
            }
        */

    public function index()
    {

        /* $doctors=\DB::table('usuario')
             ->select('*')
             ->join('medico', 'medico.id_usuario', '=', 'usuario.id')
             ->get();*/
        //$users=User::all();
        //return $users->toJson();
        //dd($users);
        $doctors=Doctor::paginate(3);
        $doctors=Doctor::orderBy('id', 'desc')->paginate(20);
        $doctors=\DB::table('user')
            ->select('*')
            ->join('doctor', 'doctor.id', '=', 'user.id')
            ->get();


        return view('admin.doctors.index', compact('doctors'));
    }
    public function obtenerUsuarios(){

    }

    public function aprobar(){
        return view('admin.doctors.aprobar', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.doctors.create');
    }
    /*public function profile()
    {
        return view('admin.users.profile');
    }
    */
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Req $request, Redirector $redirect, $id)
    {

        //$data= Request::all();
        dd('dsffds');
        $rules = array(
            'nombre' =>'required',
            'email'=>'required|email|unique:usuario',
            //'edad'=>'required',
            //'gender'=>'required',
            'password' =>'required|min:6'//,
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

        $user =User::create($request->all()	);
        //dd(Request::all()); //Facades
        //dd($request->all());
        //$user = new User($request->all());
        //$user->type='user';
        //$user->fill($request->all());
        //$user= User::create($request->all());
        //$user->save();
        return  '0';
        //\Redirect::route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        dd('aqui entro show method');
        //$users=User::all();
        $result=\DB::table('document')
            /*->select(
                'users.*',
                'user_profiles.id as profile_id',
                'user_profiles.twitter')
            // ->where('users.name', '<>' ,'Cuadrado')
            ->where('users.gender', '=' ,'Mr.')
            //->where('birthdate',  '<', '1997-01-14')
            // ->orderBy('users.id', 'asc')
            // ->orderBy(\DB::raw('RAND()'))
            ->orderBy('birthdate', 'asc')
            ->leftjoin('user_profiles','users.id','=','user_profiles.user_id')
            ->get();
        //  dd($result);*/
            ->select('document.*')
            ->where('document.id', '=', $id)
            ->get();


        return $result;


        //return $users;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */


    public function edit($id)
    {
        dd('dgfdf');
        $doctor = Doctor::findOrFail($id);
        $document=\DB::table('document')
            ->select('*')
            ->where('doctor_id' ,'=', $id )
            ->get();
        for($i=0; $i<count($document); $i++) {
            $tipo_documento[$i] = \DB::table('document_type')
                ->select('*')
                ->where('id', '=', $document[$i]->document_type_id)
                ->get();
        }
       // $doctor = [$doctor, $document, $tipo_documento];
        return view('admin.doctors.edit', compact('doctor', 'document', 'document_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Requests\EditDocumentRequest $request, $id, Redirector $redirect)
    {
        $documento = Documento::findOrFail($id);
        $documento->fill(Request::all());
        $documento->save();
        return  $redirect->route('admin.doctors.edit', $documento->doctor_id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id, Redirector $redirect, Request $request)
    {
        $documento=Documento::find($id);
        $nombre=DocumentType::find($documento->document_type_id);
        //return $id;
        $documento=Documento::findOrFail($id);
        $documento->delete();



        $message=$documento->name.' fue eliminado';

       /* if( dd($request->ajax())){
            return response()->json([
                'id' =>$this->documento->id,
                'message'=>$message
            ]);
        }
       */
        //User::destroy($id);
        Session::flash('message', $documento->name.  ' ha sido eliminado.');
        return $redirect->route('admin.doctors.edit',$documento->doctor_id);
        //dd("Eliminando". $id);
    }

}
