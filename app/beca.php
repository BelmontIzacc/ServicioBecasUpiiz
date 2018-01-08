<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class beca extends Model
{
    protected $table = "beca";

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
