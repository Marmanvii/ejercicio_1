<?php

use Illuminate\Database\Seeder;

class InfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /* se insertan los elementos en la tabla infos, se indica el insert con nombre de la columna y el valor a insertar. Tienen que ser coincidente con el tipo de dato que está definido en la DB
         */
        DB::table('infos')->insert([
            'author' => 'Autor 1',
            'title' => 'Titulo 1',
            'body' => 'Curabitur tincidunt ligula a nulla pretium tempor. Nulla vehicula nec diam non mollis.',
            'date' => $date= now(),
        ]);
        DB::table('infos')->insert([
            'author' => 'Autor 2',
            'title' => 'Titulo 2',
            'body' => 'Sed eu convallis urna. Etiam maximus consectetur metus non varius. Quisque in sollicitudin lectus.',
            'date' => $date= now(),
        ]);
        DB::table('infos')->insert([
            'author' => 'Autor 3',
            'title' => 'Titulo 3',
            'body' => 'Praesent ornare elit ut sapien congue, a aliquam tellus pellentesque. Vestibulum et mi sagittis.',
            'date' => now(),
        ]);
        DB::table('infos')->insert([
            'author' => 'Autor 4',
            'title' => 'Titulo 4',
            'body' => 'Phasellus sed lacus ut velit varius lobortis sit amet eu odio. Mauris tincidunt ante nec sollicitudin mattis.',
            'date' => now(),
        ]);

    }
}
