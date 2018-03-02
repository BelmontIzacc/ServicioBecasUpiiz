<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SpendingMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('gasto', function (Blueprint $table) {
        $table->increments('id');

        $table->integer('usuario_id')->unsigned()->index();
        $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

        $table->string('ingresoMensual',30)->nullable();
        $table->string('gastoMensual',30)->nullable();
        $table->integer('noIntegrantes')->nullable();
        $table->integer('apoyo')->nullable();
        $table->string('trabajo')->nullable();
        $table->string('dependencia')->nullable();

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
        Schema::table('gasto', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
        });
        
        Schema::drop('gasto');
    }
}
