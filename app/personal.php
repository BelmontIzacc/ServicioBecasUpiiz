<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Jenssegers\Date\Date;
use Carbon\Carbon;
use Sofa\Eloquence\Eloquence;
class personal extends Model
{
    //use Eloquence;

    protected $table = 'personales';

    protected $fillable = [
    	'usuario_id',
    	'enfermedades',
    	'telCasa',
    	'telCelular',
    	'nomTutor',
    	'telTutor',
    ];
}
