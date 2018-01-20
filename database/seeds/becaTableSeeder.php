<?php

use Illuminate\Database\Seeder;

class becaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beca')->insert([
        	'nombre' => 'Nuevo Becario',
        ]);

        DB::table('beca')->insert([
        	'nombre' => 'Telmex',
        ]);

        DB::table('beca')->insert([
        	'nombre' => 'Bécalos',
        ]);

        DB::table('beca')->insert([
        	'nombre' => 'Institucional Tipo: A,B,C',
        ]);

        DB::table('beca')->insert([
        	'nombre' => 'Manutención',
        ]);
    }
}
