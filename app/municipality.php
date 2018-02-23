<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipality extends Model
{
    //
    protected $table = 'municipio';
    
    protected $fillable = ['nombre'];
    
    public $timestamps = false;
    
    public function students(){
        return $this->hasMany(student::class, 'municipio_id');
    }
    
    public function clinics(){
        return $this->hasMany(clinic::class, 'municipio_id');
    }
}
