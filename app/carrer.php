<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrer extends Model
{
    protected $table = "programaAcademico";

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
