<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TenementMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('vivienda', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

            $table->integer('municipio_id')->unsigned()->index()->nullable();
            $table->foreign('municipio_id')->references('id')->on('municipio')->onDelete('set null');
            
            $table->integer('estado_id')->unsigned()->index()->nullable();
            $table->foreign('estado_id')->references('id')->on('estado')->onDelete('set null');

            $table->integer('tipoCasa_id')->unsigned()->index()->nullable();
            $table->foreign('tipoCasa_id')->references('id')->on('tCasa')->onDelete('set null');

            $table->integer('transporte_id')->unsigned()->index()->nullable();
            $table->foreign('transporte_id')->references('id')->on('transporte')->onDelete('set null');

            $table->integer('habitantes')->nullable();
            $table->integer('habitaciones')->nullable();
            $table->string('residencia',100)->nullable();
            //$table->string('direccion',50);

            $table->string('calle', 50)->nullable();
            $table->string('numExterior', 8)->nullable();
            $table->string('numInterior', 8)->default(0);
            $table->string('colonia', 50)->nullable();
            $table->string('codigoPostal',8)->nullable();

            $table->integer('viajeMensual')->nullable();
            $table->string('tiempo')->nullable();
            $table->string('transporte')->nullable();
            $table->integer('gastoMensual')->nullable();

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
        Schema::table('vivienda', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropForeign(['municipio_id']);
            $table->dropForeign(['estado_id']);
            $table->dropForeign(['tipoCasa_id']);
            $table->dropForeign(['transporte_id']);
        });
        
        Schema::drop('vivienda');
    }
}
