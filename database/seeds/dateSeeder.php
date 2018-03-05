<?php

use Illuminate\Database\Seeder;

class dateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('inicioFinFecha')->insert([
            'fechaInicio' => '1994-12-09',
            'fechaFin' => '1994-12-09',
        ]);
        
        
    }
}
