<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $table = "casa";

    protected $fillable = ['nombre'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
