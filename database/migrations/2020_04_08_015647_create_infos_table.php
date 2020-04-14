<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{

    public function up()
    {
        Schema::create('infos', function (Blueprint $table) { // se define el nombre que tendrá la tabla en la DB
            $table->id(); // PK autoincremental que se genera por cada inserción
            $table->string('author'); // campo de la tabla de tipo string con el nombre author
            $table->string('title');
            $table->string('body');
            $table->date('date'); // campo de la tabla del tipo date con nombre date
            $table->timestamps(); // campos para llevar registro de modificaciones e inserciones en la tabla
        });
    }

    public function down()
    {
        Schema::dropIfExists('infos');
    }
}
