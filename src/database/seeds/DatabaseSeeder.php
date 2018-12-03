<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(\UsersTableSeeder::class);
        $this->call(\UserLoginTableSeeder::class);
        $this->call(\CityTableSeeder::class);
        $this->call(\CountryTableSeeder::class);
        $this->call(\MyTableTableSeeder::class);
        $this->call(\MyStatusTableSeeder::class);
        $this->call(\MyTableDefinitionTableSeeder::class);
        $this->call(\MyTableTableSeeder::class);
        $this->call(\MyTypeTableSeeder::class);
        $this->call(\StatusTypeTableSeeder::class);
    }
}