<?php

use Illuminate\Database\Seeder;

class transportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('transporte')->insert([
 			'nombre' => 'Uber',
        	]);
        DB::table('transporte')->insert([
                'nombre' => 'Carro',
            ]);
        DB::table('transporte')->insert([
                'nombre' => 'Camion',
            ]);
        DB::table('transporte')->insert([
                'nombre' => 'Bicicleta',
            ]);
        DB::table('transporte')->insert([
                'nombre' => 'Moto',
            ]);
        DB::table('transporte')->insert([
                'nombre' => 'Motoneta',
            ]); 
        DB::table('transporte')->insert([
                'nombre' => 'Taxi',
            ]);       
    }
}
