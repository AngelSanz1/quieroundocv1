<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Created by PhpStorm.
 * User: GupoBecm
 * Date: 13/01/2016
 * Time: 11:00 AM
 */
class UsersController extends Controller{



        public function getIndex()
        {
            $result=\DB::table('users')
                ->select('usuario.*')
               // ->where('users.name', '<>' ,'Cuadrado')
               //->where('users.gender', '=' ,'Mr.')
               ->where('fecha_nacimiento',  '<', '1997-01-14')
               // ->orderBy('users.id', 'asc')
               // ->orderBy(\DB::raw('RAND()'))
             //   ->orderBy('birthdate', 'asc')
              //  ->leftjoin('user_profiles','users.id','=','user_profiles.user_id')
                ->get();
          //  dd($result);

            return $result;
        }
}