<?php

use Illuminate\Database\Seeder;

class dependenceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dependencia')->insert([
        	'opcion' => 'Si, totalmente',
        ]);

        DB::table('dependencia')->insert([
        	'opcion' => 'Si, medianamente',
        ]);

        DB::table('dependencia')->insert([
        	'opcion' => 'No depende',
        ]);

        DB::table('dependencia')->insert([
        	'opcion' => 'Mantienes a tu familia',
        ]);
    }
}
