<?php

use Illuminate\Database\Seeder;

class carrerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carrera')->insert([
            'nombre' => 'Ingeniería en Sistemas Computacionales',
            'color' => '#DDFFC4',
        ]);
        
        DB::table('carrera')->insert([
            'nombre' => 'Ingeniería en Mecatrónica',
            'color' => '#CDEEFF',
        ]);
        
        DB::table('carrera')->insert([
            'nombre' => 'Ingeniería en Alimentos',
            'color' => '#FFE1C4',
        ]);
        
        DB::table('carrera')->insert([
            'nombre' => 'Ingeniería en Metalúrgica',
            'color' => '#FFC4FF',
        ]);
        
        DB::table('carrera')->insert([
            'nombre' => 'Ingeniería en Ambiental',
            'color' => '#FEFFC4',
        ]);
    }
}
