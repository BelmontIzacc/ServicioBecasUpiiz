<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spendingMigration extends Model
{
    //
    protected $table = 'gasto';

    protected $fillable = [
    	'usuario_id',
    	'ingresoMensual',
    	'gastoMensual',
    	'noIntegrantes',
    	'apoyo',
    	'trabajo',
    	'dependencia',
    ];
}
