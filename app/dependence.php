<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dependence extends Model
{
    protected $table = "dependencia";

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
