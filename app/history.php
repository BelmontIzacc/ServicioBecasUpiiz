<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    protected $table = "historia";

    protected $fillable = ['estadoAcademico','adeudos'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
