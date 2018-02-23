<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tenement extends Model
{
    //
    protected $table = 'vivienda';

    protected $fillable = [
    	'usuario_id',
    	'municipio_id',
    	'estado_id',   	
    	'tipoCasa_id',
    	'transporte_id',
    	'habitantes',
    	'habitaciones',
    	'residencia',
    	'calle',
    	'numExterior',
    	'numInterior',
    	'colonia',
    	'codigoPostal',
    	'lejos',
    	'tiempo',
    ];
}
