<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class transport extends Model
{
    //
    protected $table = 'transporte';

    protected $fillable = [
    	'nombre',
    ];
}
