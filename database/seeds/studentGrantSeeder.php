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
        //
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
                'nombre' => 'Becalos A',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Becalos B',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Becalos C',
            ]);
        DB::table('beca')->insert([
                'nombre' => 'Telmex',
            ]);
    }
}
