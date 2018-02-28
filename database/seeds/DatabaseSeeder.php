<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(carrerTableSeeder::class);
        $this->call(userTableSeeder::class);
        $this->call(municipalitySeeder::class);
        $this->call(stateSeeder::class);
        $this->call(typeHouseSeeder::class);
        $this->call(transportSeeder::class);
        $this->call(studentGrantSeeder::class);
        $this->call(personalSeeder::class);
        $this->call(recordSeeder::class);
        $this->call(spendingSeeder::class);
        $this->call(tenementSeeder::class);

        Model::reguard();
    }
}
