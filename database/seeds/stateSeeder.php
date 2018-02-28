<?php

use Illuminate\Database\Seeder;

class stateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('estado')->insert([
            'nombre' => 'Aguascalientes',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Baja California',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Baja California Sur',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Campeche',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Chiapas',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Chihuahua',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Coahuila de Zaragoza',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Colima',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Durango',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Estado de México',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Guanajuato',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Guerrero',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Hidalgo',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Jalisco',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Michoacán de Ocampo',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Morelos',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Nayarit',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Nuevo León',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Oaxaca',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Puebla',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Querétaro',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Quintana Roo',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'San Luis Potosí',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Sinaloa',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Sonora',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Tabasco',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Tamaulipas',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Tlaxcala',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Veracruz de Ignacio de la Llave',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Yucatán',
        ]);
        
        DB::table('estado')->insert([
            'nombre' => 'Zacatecas',
        ]);
    }
}
