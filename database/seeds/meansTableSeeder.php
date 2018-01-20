<?php

use Illuminate\Database\Seeder;

class meansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medios')->insert([
        	'tipoTransp' => 'Automóvil',
        ]);

        DB::table('medios')->insert([
        	'tipoTransp' => 'Taxi o Uber',
        ]);

        DB::table('medios')->insert([
        	'tipoTransp' => 'Ruta o Camión',
        ]);

        DB::table('medios')->insert([
        	'tipoTransp' => 'Caminando',
        ]);
    }
}
