<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateDocRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'escuela' =>'required',
            'email'=>'required|email|unique:usuario',
            'cedula'=>'required|cedula|unique:medico',
            'titulo_profesional'=>'required',
            'internado'=>'required',
            'servicio_social'=>'required',
            'cursos' =>'',
            'otro' =>'',
            'experiencia' =>''

            //
        ];
    }

}
