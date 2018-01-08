<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->String('nombre', 100);
            $table->string('apellidoPaterno', 50);
            $table->string('apellidoMaterno', 50);
            $table->integer('boleta')->unique();
            $table->string('promActual');
            $table->string('periodoEscolar');
            $table->integer('edad');
            $table->string('semestre');
            $table->string('grupo');
            $table->integer('telCasa');
            $table->integer('telCel');
            $table->integer('telTutor');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('usuario');
    }
}
