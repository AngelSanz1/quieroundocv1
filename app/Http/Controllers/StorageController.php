<?php namespace App\Http\Controllers;

use App\Doctor;
use App\Documento;
use App\DocumentType;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

class StorageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return \View::make('resources.new');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	/**
	 * @param Request $request
	 * @return \Illuminate\Http\RedirectResponse|string
     */
	public function save(Request $request)
	{

		$id= Auth::user()->id;
		$doctors=Doctor::paginate(3);
		$doctors=Doctor::orderBy('id', 'desc')->paginate(20);
		$doctors=\DB::table('user')
			 ->select('*')
			 ->join('doctor', 'doctor.id', '=', 'user.id')
			 ->get();

		//obtenemos el campo file definido en el formulario
		$file1 = $request->file('file1');
		$file2 = $request->file('file2');
		$file3 = $request->file('file3');
		$file4 = $request->file('file4');
		$file5 = $request->file('file5');
		$file6 = $request->file('file6');
		$file7 = $request->file('file7');

		$nombres=array('file1','file2','file3','file4','file5','file6','file7');

		$tipo=array('CURP_',  'IFE_', 'Cedula_','Comprobante_domicilio_','Carta_Antecedentes_no_penales_','CV_','Acta_Nacimiento_');

		$nombre_completo= array('CURP',  'IFE', 'Cedula profesional','Comprobante de domicilio','Carta de antecedentes no penales','Curriculum Vitae','Acta de Nacimiento');

		$files=array($file1, $file2, $file3,$file4, $file5, $file6, $file7);

		$mime1=$file1->getMimeType();
		$mime2=$file2->getMimeType();
		$mime3=$file3->getMimeType();
		$mime4=$file4->getMimeType();
		$mime5=$file5->getMimeType();
		$mime6=$file6->getMimeType();
		$mime7=$file7->getMimeType();

		$mimes=array($mime1, $mime2, $mime3, $mime4, $mime5, $mime6, $mime7);

		//$id='3';
		for($i=0; $i<count($files); $i++)
		{
			switch ($mimes[$i])
			{

				case "image/jpeg":
				case "image/png":
				case "image/gif":
				case "application/pdf":
					//dd(\Request::file('file'));
					if (\Request::file($nombres[$i])->isValid())
					{
						$nombre = $file1->getClientOriginalName();

						$extension = strtolower(\Input::file($nombres[$i])->getClientOriginalExtension());
						$ext[$i]=$extension = strtolower(\Input::file($nombres[$i])->getClientOriginalExtension());
						\Storage::makeDirectory($id);

						\Storage::disk('local')->put('/'.$id."/".$tipo[$i].$id.".".$extension,  \File::get($files[$i]));
						echo  nl2br('El archivo '. $nombre_completo[$i] .' ha sido guardado <br> ');
						$urls[$i]=url().'/storage/'.$id."/".$tipo[$i].$id.".".$ext[$i];
						$docu=\DB::table('document')
							->select('name','document.id', 'document_url', 'doctor_id', 'document_type_id', "document_status_id")
							->join('document_type', "document_type.id", '=', "document.document_type_id" )
							->where('doctor_id', '=', $id)
							->get();
						if(empty($docu[$i]->document_url)==false){
								if($docu[$i]->doctor_id == $id )
								{
									for($g=0; $g<7; $g++){
										if( $docu[$i]->name == $tipo[$g] ){
											$docs=Documento::find($docu[$i]->id);
											$docs->document_url=$urls[$i];
											$docs->save();
										}
									}

									//dd('Entra lleno');
								}else{
									$nuevo=Documento::create(['document_url' => $urls[$i], 'doctor_id' => $id,'document_type_id' => $i+1,'document_status_id' => '3', 'observation'=>'']);
									//dd('entra vacio');

								}


						}else{
							{
									$nuevo=Documento::create(['document_url' => $urls[$i], 'doctor_id' => $id,'document_type_id' => $i+1,'document_status_id' => '3', 'observation'=>'']);
									//dd('entra vacio');
							}

						}


						/*if()
						{
							echo redirect('uploads')->with('success-message', 'File has been uploaded');
						}

						else
						{
							return redirect('uploads')->with('error-message', 'An error ocurred saving data into database');
						}*/
					}
					break;
				default:
					echo("\r\n ");
					echo 'El formato del archivo ' . $nombre_completo[$i].' es invalido, porfavor vuelva a subirlo';
			}

		}

		//$ext=pathinfo($file);
		//obtenemos el nombre del archivo

		//indicamos que queremos guardar un nuevo archivo en el disco local
	//	$id=2;
		$dir = url();
		//dd($urls);
		$docbyid=Doctor::find($id);

		//dd($docbyid);
		//$aux=$docbyid->escuela;
		//dd($aux);
		$input=Input::All();
	//	$usuario = Doctor::create(Input::only('id'));

		$data=['escuela','cedula','rating','radio_consulta','numero_consultas','disponibilidad','id_ususario','longitud','latitud','tituo_profesional','internado','servicio_social','cursos', 'otro', 'experiencia'];
		//$doc=new Doctor($data);
		//dd($docbyid->user);
		//$docbyid->User()->associate($docbyid);






		//return "archivo guardado";
	}

}
