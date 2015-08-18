<?php

/**
 * Created by PhpStorm.
 * User: franc_000
 * Date: 09/07/2015
 * Time: 23:55
 */
use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class UserTableSeeder extends Seeder
{
    public function run(){

        $faker = Faker::create();

        for($i=0; $i<100; $i++){

            $id=\DB::table('users')->insertGetId(array(
                'direccion'      => $faker->streetAddress,
                'fecha_nac'      => $faker->dateTimeBetween('-90 years','1 years'),
                'telefono'       => $faker->phoneNumber,
                'saldo'          => $faker->randomDigit,
                'ciudad'         => $faker->city,
                'first_name'     => $faker->firstName ,
                'last_name'      => $faker->lastName,
                'email'          => $faker->unique()->email,
                'password'       => \Hash::make('123456'),
                'type'           => $faker->randomElement(array('user','admin', 'especialista', 'recepcionista'))
            ));


        }

    }
}