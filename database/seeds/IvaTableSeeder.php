<?php

/**
 * Created by PhpStorm.
 * User: franc_000
 * Date: 09/07/2015
 * Time: 23:55
 */
use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class IvaTableSeeder extends Seeder
{
    public function run(){

        $faker = Faker::create();

            \DB::table('ivas')->insert(array(
                'porcentaje'     => '19 %',
                'fecha_inicio'   => '2007-08-01'
            ));




    }
}