<?php

use Illuminate\Database\Seeder;

class tenementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        if(config('global.desarrollo')){
            DB::table('vivienda')->insert([
                'usuario_id' => '2',
                'municipio_id' => '1',
                'estado_id' => '2',
                'tipoCasa_id' => '1',
                'transporte_id' => '1',
                'habitantes' => '1',
                'habitaciones' => '1',
                'calle' => 'Britaneas',
                'numExterior' => '108',
                'numInterior' => '12-A',
                'colonia' => 'Lomas de pollo',
                'codigoPostal' => '98600',
                'viajeMensual' => '20',
                'tiempo' => '20',
                'gastoMensual' => '400',
            ]);
            
            $limit = config('global.limite');
            
            for($i = 0; $i <= $limit; $i++){
                DB::table('vivienda')->insert([
                    'usuario_id' => $i+3,
                    'municipio_id' => rand(1 , 58),
                    'estado_id' => rand (1 , 31),
                    'tipoCasa_id' => rand (1 , 2),
                    'transporte_id' => rand (1 , 2),
                    'habitantes' => rand (1 , 2),
                    'habitaciones' => rand (1 , 9),
                    'calle' => 'Calle generica',
                    'numExterior' => rand (0 , 999),
                    'numInterior' => rand (0 , 999),
                    'colonia' => 'Generica',
                    'codigoPostal' => rand (0 , 9).rand (0 , 9).rand (0 , 99).rand (0 , 99),
                    'viajeMensual' => rand (0 , 999),
                    'tiempo' => rand (0 , 999),
                    'gastoMensual' => rand (0 , 999),
                ]);
            }
        }
    }
}
