<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder{

    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<30; $i++){

            $id=\DB::table('users')->insertGetId(array(
                'name' => $faker->firstName,
                'edad' => $faker->numberBetween($min = 5, $max = 100),
                'gender'=>$faker->title($gender = null|'male'|'female'),
                'active'=>$faker->boolean($chanceOfGettingTrue = 50),
                'birthdate'=>$faker->dateTimeBetween($startDate = '-100 years', $endDate = 'now'),
                'email' => $faker->unique()->email,
                'password' => \Hash::make('123456'),
                'type' => 'user'
            ));
            \DB::table('user_profiles')->insert(array(
                'user_id'=>$id,
                'bio'=>$faker->paragraph(rand(2,5)),
                'twitter'=>$faker->url,
                'website'=>'http://www.twitter.com/'.$faker->userName,

            ));
            \DB::table('tags')->insert(array(
               'name'=>$faker->name,
                'descripcion'=>$faker->paragraph(rand(2,10)),
                'created_at'=>$faker->dateTime($max='now'),
            ));
        }
    }

}
