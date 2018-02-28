<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
}
