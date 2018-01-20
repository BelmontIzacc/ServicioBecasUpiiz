<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class diseases extends Model
{
    protected $table = "enfermedades";

    protected $fillable = ['opcion','cual'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
