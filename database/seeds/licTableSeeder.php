<?php

use Illuminate\Database\Seeder;

class licTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('licenciatura')->insert([
    		'nombre' => 'Si',
    	]);

    	DB::table('licenciatura')->insert([
    		'nombre' => 'No',
    	]);
        
    }
}
