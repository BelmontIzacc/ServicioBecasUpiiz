<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipality extends Model
{
    //
    protected $table = 'municipio';
    
    protected $fillable = ['nombre'];
    
    public $timestamps = false;
    
    public function tenement(){
        return $this->hasMany(tenement::class, 'municipio_id');
    }
    
}
