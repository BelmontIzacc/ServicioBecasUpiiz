<?php

use Illuminate\Database\Seeder;

class typeHouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            DB::table('tCasa')->insert([
                'nombre' => 'Casa Sola',
            ]); 
            DB::table('tCasa')->insert([
                'nombre' => 'Departamento',
            ]); 
            DB::table('tCasa')->insert([
                'nombre' => 'Vecindario',
            ]); 
            DB::table('tCasa')->insert([
                'nombre' => 'Cuarto de huespedes',
            ]);
            DB::table('tCasa')->insert([
                'nombre' => 'Cuarto de azotea',
            ]);
    }
}
