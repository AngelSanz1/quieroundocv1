<?php
/**
 * Created by PhpStorm.
 * User: GupoBecm
 * Date: 13/01/2016
 * Time: 10:11 AM
 */
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder{

    public function run()
    {
        \DB::table('users')->insert(array(
            'name' => 'Cuadrado',
            'email'=> 'ecuadrado@grupobecm.com',
            'password'=> \Hash::make('cuadrado'),
            'type'=> 'admin'
        ));
    }

}
