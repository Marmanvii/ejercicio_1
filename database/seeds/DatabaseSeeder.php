<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() // método que se ejecuta al llamar a los seeders
    {
        $this->call(InfosSeeder::class); // llamada a la clase InfosSeeder para ejecutar los seeders
    }
}
