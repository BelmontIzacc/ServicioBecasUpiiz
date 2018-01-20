<?php

use Illuminate\Database\Seeder;

class placeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('casa')->insert([
        	'tipoCasa' => 'Casa sola',
        ]);

        DB::table('casa')->insert([
        	'tipoCasa' => 'Departamento',
        ]);

        DB::table('casa')->insert([
        	'tipoCasa' => 'Vecindario',
        ]);

        DB::table('casa')->insert([
        	'tipoCasa' => 'Cuarto de huéspedes',
        ]);

        DB::table('casa')->insert([
        	'tipoCasa' => 'Cuarto de azotea',
        ]);
    }
}
