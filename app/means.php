<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class means extends Model
{
    protected $table = "medios";

    protected $fillable = ['tipoTransp','cuantos'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
