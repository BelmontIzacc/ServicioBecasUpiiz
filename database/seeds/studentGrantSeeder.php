<?php

use Illuminate\Database\Seeder;

class studentGrantSeeder extends Seeder
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
                'nombre' => 'Becalos A',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Becalos B',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Becalos C',
            ]);
        DB::table('beca')->insert([
 			    'nombre' => 'Institucional A',
        	]);
        DB::table('beca')->insert([
                'nombre' => 'Institucional B',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Institucional C',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Manutención 1er. ciclo',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Manutención 2do. ciclo',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Manutención 3er. ciclo',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Manutención 4to. ciclo',
            ]);
    }
}
