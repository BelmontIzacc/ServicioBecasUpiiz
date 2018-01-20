<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prospera extends Model
{
    protected $table = "prospera";

    protected $fillable = ['opcion','cual'];

    public $timestamps = false;

    public function student(){
        return $this->hasOne('App\student');
    }
}
