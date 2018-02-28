<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class state extends Model
{
    //
    protected $table = 'estado';
    
    protected $fillable = ['nombre'];
    
    public $timestamps = false;
    
    public function tenement(){
        return $this->hasMany(tenement::class, 'estado_id');
    }
}
