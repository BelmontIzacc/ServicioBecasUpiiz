<?php

use Illuminate\Database\Seeder;

class spendingSeeder extends Seeder
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
            DB::table('gasto')->insert([
                'usuario_id' => '2',
                'ingresoMensual' => 750,
                'gastoMensual' => 10000,
                'noIntegrantes' => '9',
                'apoyo' => '2',
                'trabajo' => 'No',
                'dependencia' => 'Si,totalmente',
            ]);
            
            $limit = config('global.limite');
            
            for($i = 0; $i <= $limit; $i++){
                DB::table('gasto')->insert([
                    'usuario_id' => $i+3,
                    'ingresoMensual' => rand(500 , 1000),
                    'gastoMensual' => rand(500 , 1000),
                    'noIntegrantes' => rand(1 , 5),
                    'apoyo' => rand(1 , 2),
                    'trabajo' => rand(1 , 3),
                    'dependencia' => rand(1 , 3),
                ]);
            }
        }
    }
}
