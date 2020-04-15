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
    /*
     * la llamada a CategoriesSeeder se ejecuta antes que la Infos por la foreign key que hay en la tabla infos.
     */

        $this->call(CategoriesSeeder::class); // llamada a la clase CategoriesSeeder para ejecutar los seeders
        $this->call(InfosSeeder::class); // llamada a la clase InfosSeeder para ejecutar los seeders
    }
}
