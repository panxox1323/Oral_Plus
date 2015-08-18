<?php

/**
 * Created by PhpStorm.
 * User: franc_000
 * Date: 09/07/2015
 * Time: 23:55
 */
use \Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    public function run(){

        \DB::table('users')->insert(array(
            'first_name'     => 'Francisco',
            'last_name'      => 'Inostroza',
            'email'          => 'franciscoq',
            'password'       => \Hash::make('secret'),
            'type'           => 'admin'
        ));


    }
}