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
                'nombre' => 'casa',
            ]); 
            DB::table('tCasa')->insert([
                'nombre' => 'Departamento',
            ]); 
            DB::table('tCasa')->insert([
                'nombre' => 'Hotel',
            ]); 
            DB::table('tCasa')->insert([
                'nombre' => 'rommi',
            ]);
    }
}
