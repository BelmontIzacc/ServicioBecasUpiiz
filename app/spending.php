<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class spending extends Model
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

    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
}
