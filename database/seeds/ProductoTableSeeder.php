<?php

/**
 * Created by PhpStorm.
 * User: franc_000
 * Date: 09/07/2015
 * Time: 23:55
 */
use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class ProductoTableSeeder extends Seeder
{
    public function run(){


        $faker = Faker::create();

        for($i=0;$i<30;$i++){

            \DB::table('productos')->insert(array(
                'nombre'      => $faker->firstName,
                'precio'      => $faker->numberBetween('1000', '20000'),


        ));

        }




    }
}