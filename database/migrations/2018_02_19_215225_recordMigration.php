<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecordMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('antecedentes', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('usuario_id')->unsigned()->index();
            $table->foreign('usuario_id')->references('id')->on('usuario')->onDelete('cascade');

            $table->integer('beca_id')->unsigned()->index()->nullable();
            $table->foreign('beca_id')->references('id')->on('beca')->onDelete('set null');

            $table->integer('Abeca_id')->unsigned()->index()->nullable();
            $table->foreign('Abeca_id')->references('id')->on('beca')->onDelete('set null');

            $table->string('promActual',4);
            $table->string('licenciatura', 50)->default("sin especificar");
            $table->string('historiaAC')->nullable();

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
       Schema::table('antecedentes', function (Blueprint $table) {
            $table->dropForeign(['usuario_id']);
            $table->dropForeign(['beca_id']);
        });
        
        Schema::drop('antecedentes');
    }
}
