<?php

use Illuminate\Database\Seeder;

class diseasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enfermedades')->insert([
        	'opcion' => 'Si',
        ]);

        DB::table('enfermedades')->insert([
        	'opcion' => 'No',
        ]);
    }
}
