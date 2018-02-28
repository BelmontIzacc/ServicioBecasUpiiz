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
    	'promActual',
    	'licenciatura',
    	'historiaAC',
    ];

    public function user(){
        return $this->belongsTo(user::class, 'usuario_id');
    }
    public function studentGrant(){
        return $this->belongsTo(studentGrant::class, 'beca_id');
    }
    public function AstudentGrant(){
        return $this->belongsTo(studentGrant::class, 'Abeca_id');
    }
}
