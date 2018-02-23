<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentGrant extends Model
{
    //
    protected $table = 'beca';

    protected $fillable = [
    	'nombre',
    ];
}
