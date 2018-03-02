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
    	'calle',
    	'numExterior',
    	'numInterior',
    	'colonia',
    	'codigoPostal',
    	'viajeMensual',
    	'tiempo',
        'gastoMensual',
        'transporte',
    ];

    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
    public function municipality(){
        return $this->belongsTo(municipality::class, 'municipio_id');
    }
    public function state(){
        return $this->belongsTo(state::class, 'estado_id');
    }
    public function typeHouse(){
        return $this->belongsTo(typeHouse::class, 'tipoCasa_id');
    }
    public function transport(){
        return $this->belongsTo(transport::class, 'transporte_id');
    }
}
