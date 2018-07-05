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
                'municipio_id' => '17',
                'estado_id' => '31',
                'tipoCasa_id' => '1',
                'transporte_id' => '2',
                'habitantes' => '3',
                'habitaciones' => '9',
                'residencia' => 'permanente',
                'calle' => 'niños heroes',
                'numExterior' => '46',
                'numInterior' => 'B',
                'colonia' => 'El paraiso',
                'codigoPostal' => 98613,
                'tiempo' => '15-30',
                'pagoMensual' => '8000',
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
                    'residencia' => 'casa generica',
                    'calle' => 'Calle generica',
                    'numExterior' => rand (0 , 999),
                    'numInterior' => rand (0 , 999),
                    'colonia' => 'Generica',
                    'codigoPostal' => rand (0 , 9).rand (0 , 9).rand (0 , 99).rand (0 , 99),
                    'viajeMensual' => rand (0 , 999),
                    'tiempo' => rand (0 , 999),
                    'gastoMensual' => rand (0 , 999),
                    'transporte' => rand (0 , 999),
                    'pagoMensual' => rand(0,10000),
                ]);
            }
        }
    }
}
