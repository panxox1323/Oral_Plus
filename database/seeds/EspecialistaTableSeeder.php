<?php

/**
 * Created by PhpStorm.
 * User: franc_000
 * Date: 09/07/2015
 * Time: 23:55
 */
use \Illuminate\Database\Seeder;
use \Faker\Factory as Faker;

class EspecialistaTableSeeder extends Seeder
{
    public function run(){

        $faker = Faker::create();

        for($i=0; $i<50; $i++){

            $id_especialidad=\DB::table('especialidades')->insertGetId(array(

                'especialidad'   => $faker->randomElement(array('endodoncista', 'ortodoncista', 'implantologo', 'cirujano MF'))

            ));

            $id_paciente=\DB::table('users')->insertGetId(array(

                'run'            => $faker->numberBetween('11111111', '999999999'),
                'first_name'     => $faker->firstName.' '.$faker->firstName,
                'last_name'      => $faker->lastName.' '.$faker->lastName,
                'fecha_nacimiento'      => $faker->dateTimeBetween('-90 years', 'now'),
                'telefono'       => $faker->numberBetween('11111111', '99999999'),
                'email'          => $faker->email,
                'saldo'          => $faker->numberBetween('0', '10000000'),
                'ciudad'         => $faker->city,
                'direccion'      => $faker->streetAddress,


            ));

            $id_turnos=\DB::table('turnos')->insertGetId(array(

                'tipo'        => $faker->randomElement(array('1', '2', '3', '4', '5')),
                'duracion'    => $faker->randomElement(array('4 horas', '5 horas', '6 horas', '7 horas', '8horas')),
                'estado'      => $faker->randomElement(array('activo', 'inactivo'))

            ));

            $id_especialista=\DB::table('especialistas')->insertGetId(array(
                'run'             => $faker->randomDigit,
                'nombres'         => $faker->firstName . $faker->firstName,
                'apellidos'       => $faker->lastName . $faker->lastName,
                'direccion'       => $faker->streetAddress,
                'fecha_nac'       => $faker->dateTimeBetween('-45 years','-15 years')->format('Y-m-d'),
                'telefono'        => $faker->randomDigit,
                'fecha_contrato'  => $faker->date('Y-m-d', 'now' ),
                'titulo'          => $faker->randomElement(array('ortodoncista', 'endodoncista', 'implantologo', 'cirujano MF')),
                'id_especialidad' => $id_especialidad,
                'id_turno'        => $id_turnos,

            ));

            $id_receta=\DB::table('recetas')->insertGetId(array(

                'medicamento_1'   => $faker->randomElement(array('aspirina', 'dipirona', 'paracetamol'))

            ));


            $id_tratamiento=\DB::table('tratamientos')->insertGetId(array(

                'fecha_inicio'        => $faker->dateTimeBetween('-1 years', 'now'),
                'valor_tratamiento'   => $faker->numberBetween('20000', '1000000'),

            ));

            $id_boleta=\DB::table('boletas')->insertGetId(array(

                'forma_pago'          => $faker->randomElement(array('efectivo', 'pago con tarjeta', 'cheque a 30 dias', 'cheque al dia')),
                'fecha'               => $faker->dateTimeBetween('-1 years', 'now'),
                'valor_pagado'        => $faker->numberBetween('10000', '1000000'),

            ));

            $id_consulta=\DB::table('consultas')->insertGetId(array(

                'fecha'               => $faker->dateTimeBetween('-1 years', 'now'),
                'hora'                => $faker->time('H:i:s', 'now'),
                'estado'              => $faker->randomElement(array('activo', 'inactivo')),
                'id_paciente'         => $id_paciente,
                'id_especialista'     => $id_especialista,
                'valor_consulta'      => $faker->numberBetween('10000', '50000'),
                'id_boleta'           => $id_boleta,

            ));

            \DB::table('intervenciones')->insert(array(

                'id_consulta'         => $id_consulta,
                'id_tratamiento'      => $id_tratamiento,
                'fecha'               => $faker->dateTimeBetween('-1 years', 'now'),
                'estado'              => $faker->randomElement(array('activo', 'pendiente')),
                'id_receta'           => $id_receta,

            ));


            $id=\DB::table('insumos')->insertGetId(array(

                'nombre'            => $faker->name,
                'precio_unitario'   => $faker->numberBetween('1000','5000'),

            ));

            $id2=\DB::table('proveedors')->insertGetId(array(

                'nombre'      => $faker->name,
                'direccion'   => $faker->streetAddress,
                'telefono'    => $faker->numberBetween('11111111','99999999'),
                'email'       => $faker->email,
                'giro'        => $faker->randomElement(array('uno', 'dos', 'tres', 'cuatro')),

            ));

            $id3=\DB::table('factura_compras')->insert(array(
                'id_proveedor'     => $id2,
                'cantidad'         => $faker->numberBetween('1' , '20'),
                'valor_unitario'   => $faker->numberBetween('1000', '30000'),
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

        \DB::table('ivas')->insert(array(
            'porcentaje_iva'     => '19 %',
            'fecha_inicio'   => '2007-08-01'
        ));


    }
}