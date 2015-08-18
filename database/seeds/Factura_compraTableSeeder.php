<?php

/**
 * Created by PhpStorm.
 * User: franc_000
 * Date: 09/07/2015
 * Time: 23:55
 */
use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class Factura_compraTableSeeder extends Seeder
{
    public function run(){

        $faker = Faker::create();

        for($i=0; $i<10; $i++){

            $id=\DB::table('insumos')->insertGetId(array(

                'nombre'            => $faker->name,
                'precio_unitario'   => $faker->numberBetween('1000','5000'),
                'descripcion'       => $faker->sentences($nbsentences = 3),

            ));

            $id2=\DB::table('proveedores')->insertGetId(array(

                'nombre'      => $faker->name,
                'direccion'   => $faker->streetAddress,
                'telefono'    => $faker->numberBetween('11111111','99999999'),
                'email'       => $faker->email,
                'giro'        => array('uno', 'dos', 'tres', 'cuatro')

            ));

            $id3=\DB::table('factura_compras')->insertGetId(array(
                'id_proveedor'     => $id2,
                'fecha_compra'     => $faker->dateTimeBetween('-1 years', 'now'),
                'forma_pago'       => $faker->randomElement(array('contado', 'cheque a 30 dias', ' cheque a 60 dias')),
            ));

            \DB::table('detalle__compras')->insert(array(
                'id_factura'       => $id3,
                'id_insumo'        => $id,
                'cantidad'         => $faker->numberBetween('1', '20'),
                'precio'           => $faker->numberBetween('10000', '500000')
            ));

        }


    }
}