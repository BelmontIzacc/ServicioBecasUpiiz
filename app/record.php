<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class record extends Model
{
    //
    protected $table = 'antecedentes';

    protected $fillable = [
    	'usuario_id',
    	'beca_id',
    	'Abeca_id',
    	'licenciatura',
    	'historiaAC',
    ];
}
