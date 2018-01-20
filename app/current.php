<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class current extends Model
{
    protected $table = "becaActual";

    protected $fillable = ['nombreBecaA','cual'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
