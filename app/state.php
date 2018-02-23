<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    //
    protected $table = 'estado';
    
    protected $fillable = ['nombre'];
    
    public $timestamps = false;
    
    public function students(){
        return $this->hasMany(student::class, 'estado_id');
    }
}
