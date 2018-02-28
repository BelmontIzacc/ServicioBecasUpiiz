<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentGrant extends Model
{
    //
    protected $table = 'beca';

    protected $fillable = [
    	'nombre',
    ];

    public function record(){
        return $this->hasMany(record::class, 'beca_id');
    }
    public function Arecord(){
        return $this->hasMany(record::class, 'Abeca_id');
    }
}
