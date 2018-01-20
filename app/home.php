<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $table = "residencia";

    protected $fillable = ['tipoResidencia','pagoMensual'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
