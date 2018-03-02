<?php

use Illuminate\Database\Seeder;

class personalSeeder extends Seeder
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
            DB::table('personales')->insert([
                'usuario_id' => '2',
                'enfermedades' => 'Todas xD',
                'telCelular' => '492-127-33-00',
                'telCasa' => '92 2 59 66',
                'nomTutor' => 'Momi',
                'telTutor' => '9225966',
            ]);
            
            $limit = config('global.limite');
            
            for($i = 0; $i <= $limit; $i++){
                DB::table('personales')->insert([
                    'usuario_id' => $i+3,
                    'enfermedades' => 'todas D:',
                    'telCasa' => rand(10 , 74),
                    'telCelular' => rand(11 , 72),
                    'nomTutor' => 'Modre w.w',
                    'telTutor' => rand(10 , 76),
                ]);
            }
        }
    }
}
