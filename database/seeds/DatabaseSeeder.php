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

        $this->call(userTableSeeder::class);
        $this->call(studentTableSeeder::class);
        $this->call(becaTableSeeder::class);
        $this->call(carrerTableSeeder::class);
        $this->call(historyTableSeeder::class);
        $this->call(homeTableSeeder::class);
        $this->call(placeTableSeeder::class);
        $this->call(dependenceTableSeeder::class);
        $this->call(prosperaTableSeeder::class);
        $this->call(meansTableSeeder::class);
        $this->call(diseasesTableSeeder::class);
        $this->call(licTableSeeder::class);
        $this->call(currentTableSeeder::class);

        Model::reguard();
    }
}
