<?php

use Illuminate\Database\Seeder;

class recordSeeder extends Seeder
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
            DB::table('antecedentes')->insert([
                'usuario_id' => '2',
                'beca_id' => '1',
                'actualBeca' => 'Becalos',
                'promActual' => '8.7',
                'licenciatura' => 'Ninguna',
                'historiaAC' => 'Regular'
            ]);
            
            $limit = config('global.limite');
            
            for($i = 0; $i <= $limit; $i++){
                DB::table('antecedentes')->insert([
                    'usuario_id' => $i+3,
                    'beca_id' => rand(1 , 3),
                    'actualBeca' => rand(1 , 3),
                    'promActual' => rand(5 , 8),
                    'licenciatura' => 'Sin Terminar',
                    'historiaAC' => rand(1 , 2),
                ]);
            }
        }
    }
}
