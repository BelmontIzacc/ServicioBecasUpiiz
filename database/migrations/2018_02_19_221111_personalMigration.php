<?php


use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class PersonalMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('personales', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

            $table->string('enfermedades', 50)->default("sin especificar");
            $table->string('telCasa',50)->nullable();
            $table->string('telCelular',50)->nullable();
            $table->string('nomTutor',50)->nullable();
            $table->string('telTutor',50)->nullable();

            //$table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('personales', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
        });
        
        Schema::drop('personales');
    }
}
