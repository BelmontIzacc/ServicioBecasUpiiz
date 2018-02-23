<?php

use Illuminate\Database\Seeder;

class userTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('usuario')->insert([
            'nombre' => 'Izacc',
            'apellidoPaterno' => 'Belmont',
            'apellidoMaterno' => 'Belmont',
            'boleta' => '2016670126',
            'tipo' => '1',
            'password' => bcrypt('admin'),
            'edad' => '22',
            'grupo' => '2cm3',
            'semestre' => '6',
            'promActual' => '8.2',
            'carrera_id' =>'1',
        ]);
    }
}
