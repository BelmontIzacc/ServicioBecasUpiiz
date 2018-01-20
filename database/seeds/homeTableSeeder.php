<?php

use Illuminate\Database\Seeder;

class homeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('residencia')->insert([
        	'tipoResidencia' => 'Permanente',
        ]);

        DB::table('residencia')->insert([
        	'tipoResidencia' => 'Prestada',
        ]);

        DB::table('residencia')->insert([
        	'tipoResidencia' => 'Rentada',
        ]);
    }
}
