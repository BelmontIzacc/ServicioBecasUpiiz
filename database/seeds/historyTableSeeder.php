<?php

use Illuminate\Database\Seeder;

class historyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('historia')->insert([
        	'estadoAcademico' => 'Regular',
        ]);

        DB::table('historia')->insert([
        	'estadoAcademico' => 'Irregular 1 adeudo',
        ]);

        DB::table('historia')->insert([
        	'estadoAcademico' => 'Irregular 2 adeudos',
        ]);

        DB::table('historia')->insert([
        	'estadoAcademico' => 'Más de 3 adeudos',
        ]);
    }
}
