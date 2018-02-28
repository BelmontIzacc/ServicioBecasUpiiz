<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carrer extends Model
{
    protected $table = 'carrera';
    
    protected $fillable = ['nombre', 'color'];
    
    public $timestamps = false;
    
    public function user(){
        return $this->hasMany(user::class, 'carrera_id');
    }
}
