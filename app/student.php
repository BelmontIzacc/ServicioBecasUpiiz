<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = "alumno";

    protected $fillable = ['estado','municipio','numPersonas','numHabitaciones','ingMensual','egrMensual','noIntegrantes','noPerAport','trabajo','numPerDepen','numAutos','tiempoViaje','viajeMensual','gastoMensual','usuario_id','programaAcademico_id','beca_id','licenciatura_id','becaActual_id','historia_id','residencia_id','casa_id','depende_id','prospera_id','medios_id','enfermedad_id'];

    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\user');
    }

    public function carrer(){
        return $this->belongsTo('App\carrer');
    }

    public function beca(){
        return $this->belongsTo('App\beca');
    }

    public function lic(){
        return $this->belongsTo('App\lic');
    }

    public function current(){
        return $this->belongsTo('App\current');
    }

    public function history(){
        return $this->belongsTo('App\history');
    }

    public function home(){
        return $this->belongsTo('App\home');
    }

    public function place(){
        return $this->belongsTo('App\place');
    }

    public function dependence(){
        return $this->belongsTo('App\dependence');
    }

    public function prospera(){
        return $this->belongsTo('App\prospera');
    }

    public function means(){
        return $this->belongsTo('App\means');
    }

    public function diseases(){
        return $this->belongsTo('App\diseases');
    }
}
