<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado',50); 
            $table->string('municipio',50);
            $table->integer('numPersonas');
            $table->integer('numHabitaciones');
            $table->integer('ingMensual');
            $table->integer('egrMensual');
            $table->integer('noIntegrantes');
            $table->integer('noPerAport');
            $table->string('trabajo');
            $table->integer('numPerDepen');
            $table->integer('numAutos');
            $table->integer('tiempoViaje');
            $table->integer('viajeMensual');
            $table->integer('gastoMensual');

            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

            $table->integer('programaAcademico_id')->unsigned()->index()->nullable();
            $table->foreign('programaAcademico_id')->references('id')->on('programaAcademico')->onDelete('set null');
            
            $table->integer('beca_id')->unsigned()->index()->nullable();
            $table->foreign('beca_id')->references('id')->on('beca')->onDelete('set null');
            
            $table->integer('licenciatura_id')->unsigned()->index()->nullable();
            $table->foreign('licenciatura_id')->references('id')->on('licenciatura')->onDelete('set null');
            
            $table->integer('becaActual_id')->unsigned()->index()->nullable();
            $table->foreign('becaActual_id')->references('id')->on('becaActual')->onDelete('set null');

            $table->integer('historia_id')->unsigned()->index()->nullable();
            $table->foreign('historia_id')->references('id')->on('historia')->onDelete('set null');

            $table->integer('residencia_id')->unsigned()->index()->nullable();
            $table->foreign('residencia_id')->references('id')->on('residencia')->onDelete('set null');

            $table->integer('casa_id')->unsigned()->index()->nullable();
            $table->foreign('casa_id')->references('id')->on('casa')->onDelete('set null');

            $table->integer('depende_id')->unsigned()->index()->nullable();
            $table->foreign('depende_id')->references('id')->on('dependencia')->onDelete('set null');

            $table->integer('prospera_id')->unsigned()->index()->nullable();
            $table->foreign('prospera_id')->references('id')->on('prospera')->onDelete('set null');

            $table->integer('medios_id')->unsigned()->index()->nullable();
            $table->foreign('medios_id')->references('id')->on('medios')->onDelete('set null');

            $table->integer('enfermedad_id')->unsigned()->index()->nullable();
            $table->foreign('enfermedad_id')->references('id')->on('enfermedades')->onDelete('set null');
            
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
        Schema::table('alumno', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropForeign(['programaAcademico_id']);
            $table->dropForeign(['beca_id']);
            $table->dropForeign(['licenciatura_id']);
            $table->dropForeign(['becaActual_id']);
            $table->dropForeign(['historia_id']);
            $table->dropForeign(['residencia_id']);
            $table->dropForeign(['casa_id']);
            $table->dropForeign(['depende_id']);
            $table->dropForeign(['prospera_id']);
            $table->dropForeign(['medios_id']);
            $table->dropForeign(['enfermedad_id']);
        });
        Schema::drop('alumno');
    }
}
