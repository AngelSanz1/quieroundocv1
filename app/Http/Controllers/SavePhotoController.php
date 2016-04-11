<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;

class SavePhotoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		//dd($request->id);
		return \View::make('photo');

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

	public function save(Request $request) {
		$id = $request->id;
		$file1 = $request->file('file1');
		$name = 'file1';
		$type = 'fotografia';
		$full_name = 'fotografia';
		$mime = $file1->getMimeType();

		switch($mime) {
			case "image/jpeg":
			case "image/png":
				if(\Request::file($name)->isValid()) {
					$ext=$extension = strtolower(\Input::file($name)->getClientOriginalExtension());
					\Storage::makeDirectory($id);
					\Storage::disk('local')->put('/'.$id."/".$type.'_'.$id.".".$extension,  \File::get($file1));
					echo  nl2br('El archivo '. $full_name .' ha sido guardado <br> ');
					$url='/storage/'.$id."/".$type.'_'.$id.".".$ext;
					$user = User::find($id);
					$user->url_photo = $url;
					$user->save();
				}
			break;
			default:
				echo("\r\n ");
				echo 'El formato del archivo ' . $full_name.' es invalido, porfavor vuelva a subirlo';
		}
	}

}
