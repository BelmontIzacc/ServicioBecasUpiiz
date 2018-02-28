<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class typeHouse extends Model
{
    //
    protected $table = 'tCasa';

    protected $fillable = [
    	'nombre',
    ];

    public function tenement(){
        return $this->hasMany(tenement::class, 'tipoCasa_id');
    }
}
