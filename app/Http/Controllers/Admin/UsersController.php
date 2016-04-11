<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use \Illuminate\Http\Request as Req;
use Illuminate\Routing\Redirector;

use Illuminate\Routing\Route;
use \Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class UsersController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
		$this->beforeFilter('@findUser', ['only'=>['show', 'edit','updatedoc', 'update', 'destroy']]);
	}

	public function findUser(Route $route)
	{
		$this->user=User::findOrFail($route->getParameter('users'));
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
		$users=User::paginate(15);
		//$users=User::all();
		//return $users->toJson();
		//dd($users);

		$users=User::orderBy('id', 'desc')->paginate(20);

		return view('admin.users.index', compact('users'));
	}
	public function obtenerUsuarios(){

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.users.create');
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
	public function store(Req $request, Redirector $redirect)
	{
		//$data= Request::all();

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
		//$users=User::all();
		$result=\DB::table('usuario')
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
		->select('usuario.*')
		->where('usuario.id', '=', $id)
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
		$user = User::findOrFail($id);
		return view('admin.users.edit', compact('user'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Requests\EditUserRequest $request, $id, Redirector $redirect)
	{
		$user = User::findOrFail($id);
		$user->fill(Request::all());

		$user->save();
		return  $redirect->route('admin.users.index');
	}
	public function updatedoc(Requests\EditDocRequest $request, $id, Redirector $redirect)
	{
		$user = Doctor::findOrFail($id);
		$user->fill(Request::all());

		$user->save();
		return  $redirect->route('admin.users.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id, Redirector $redirect, Request $request)
	{
		//return $id;
		$user=User::findOrFail($id);
		$user->delete();


		$this->user->delet();
		$message=$this->user->name.' fue eliminado';

		if($request->ajax()){
			return response()->json([
				'id' =>$this->user->id,
				'message'=>$message
			]);
		}
		//User::destroy($id);
		Session::flash('message', $user->nombre.  ' ha sido eliminado.');
		return $redirect->route('admin.users.index');
		//dd("Eliminando". $id);
	}

}
