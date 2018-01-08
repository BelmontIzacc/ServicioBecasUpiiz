<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lic extends Model
{
    protected $table = "licenciatura";

    protected $fillable = ['nombre','cual'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
