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

            $table->String('nombre', 50);
            $table->string('apellidoPaterno', 50);
            $table->string('apellidoMaterno', 50);
            $table->string('boleta')->unique();
            $table->integer('tipo')->default(2);
            $table->string('password', 60)->default(1);
            $table->integer('edad');
            $table->string('grupo',5);
            $table->string('semestre');
            $table->string('promActual');

            $table->integer('carrera_id')->unsigned()->index()->nullable();
            $table->foreign('carrera_id')->references('id')->on('carrera')->onDelete('set null');
            $table->timestamps();
            $table->rememberToken();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('usuario', function (Blueprint $table) {
            $table->dropForeign(['carrera_id']);
        });
        Schema::drop('usuario');
    }
}