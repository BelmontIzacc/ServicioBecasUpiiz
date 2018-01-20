<?php

use Illuminate\Database\Seeder;

class prosperaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prospera')->insert([
        	'opcion' => 'Si',
        ]);

        DB::table('prospera')->insert([
        	'opcion' => 'No',
        ]);
    }
}
