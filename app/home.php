<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class home extends Model
{
    protected $table = "residencia";

    protected $fillable = ['nombre','pagoMensual'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
