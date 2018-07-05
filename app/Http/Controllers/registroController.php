<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
/*use App\Http\Requests;*/
use App\Http\Controllers\Controller;

use App\user;
use App\record;
use App\tenement;
use App\spending;
use App\personal;

use Hash;

class registroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $beca = \App\studentGrant::lists('nombre','id');
        $estado = \App\state::lists('nombre', 'id');
        $municipio = \App\municipality::lists('nombre', 'id');
        $tCasa = \App\typeHouse::lists('nombre', 'id');
        $transporte = \App\transport::lists('nombre', 'id');
        $index = 4;

        return view('registro2',['index'=>$index,'beca'=>$beca,'estado'=>$estado,'municipio'=>$municipio,
            'tCasa'=>$tCasa,'transporte'=>$transporte]);
    }

    public function direccionar()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
                'promActual'=>'required|numeric|between:0,10',
                'beca'=>'required',
                'lic'=>'required',
                'licenciatura'=>'required_if:lic,si|alpha',
                'becaA' =>'required',
                'actualBeca'=>'required_if:becaA,si',
                'historiaAC'=>'required|between:1,2',

                'estado'=>'required',
                'municipio'=>'required',
                'habitantes'=>'required|integer',
                'habitaciones'=>'required|integer',
                'tCasa'=>'required',
                'residencia'=>'required|between:1,3',
                'pagoMensual' =>'required_if:residencia,3',
                'calle'=>'required|max:50',
                'colonia'=>'required|max:50',
                'codigoPostal'=>'required|max:8',
                'numInterior'=>'max:8',
                'numExterior'=>'required|max:8',
                'tiempo'=>'required|between:1,6',
                'transporte'=>'required',
                'viajeMensual'=>'required_unless:municipio,58,municipio,17|integer',
                'transporte2'=>'required_unless:municipio,58,municipio,17',
                'gastoMensual2'=>'required_unless:municipio,58,municipio,17|integer',
                
                'ingresoMensual'=>'required|max:30',
                'gastoMensual'=>'required|max:30',
                'noIntegrantes'=>'required|integer|max:11',
                'apoyo'=>'required|integer|max:11',
                'trabajo'=>'required',
                'dependencia'=>'required|between:1,4',

                'telCasa'=>'required',
                'telCelular'=>'required',
                'nomTutor'=>'required',
                'telTutor'=>'required',
                'enfe'=>'required',
                'enfermedades'=>'required_if:enfe,si',
            ]);
        //Primera Parte
        $regular = $request->historiaAC;
        $bb = $request->actualBeca;
        $l = $request->lic;

        if ($regular == 1) {
            $letra = "Regular";
        }else{
            $letra = "Irregular";
        }

        if($l == 'no'){
            $licenciatura = "";
        }else{
            $licenciatura = $request->licenciatura;
        }

        $es = \App\studentGrant::find($bb);
        if($request->becaA=='si'){
            $es2 = $es->nombre;
        }else{
            $es2 = "";
        }

        //Segunda Parte
        $dd = $request->transporte2;
        $m = $request->municipio;
        $vm = $request->viajeMensual;
        $gm = $request->gastoMensual2;
        $r = $request->residencia;
        $pm = $request->pagoMensual;

        $ee = \App\transport::find($dd);
        if ($ee=="") {
            $ee2 = "";
        }else{
            $ee2 = $ee->nombre;
        }

        if ($m == 58 || $m == 17) {
            $vm = "";
            $gm = "";
        }

        if($r==3){
        }else{
            $pm = "";
        }

        if ($r==1) {
            $rr = "Permanente";
        }elseif ($r==2) {
            $rr = "Prestada";
        }elseif ($r==3) {
            $rr = "Rentada";
        }

        //Tercera Parte
        $d = $request->dependencia;

        if ($d==1) {
            $de = "Si, totalmente";
        }elseif ($d==2) {
            $de = "Si, medianamente";
        }elseif ($d==3) {
            $de = "No depende";
        }elseif ($d==4) {
            $de = "Mantienes a tu familia";
        }

        //Cuarta Parte
        $en = $request->enfe;
        $enn = $request->enfermedades;

        if ($en=="no") {
            $enn="";
        }

        record::create([
            'usuario_id'=>Auth::user()->id,
            'beca_id'=>$request->beca,
            'actualBeca'=>$es2,
            'promActual'=>$request->promActual,
            'licenciatura'=>$licenciatura,
            'historiaAC' =>$letra,
            ]);
        tenement::create([
            'usuario_id'=>Auth::user()->id,
            'municipio_id'=>$request->municipio,
            'estado_id'=>$request->estado,
            'habitantes'=>$request->habitantes,
            'habitaciones'=>$request->habitaciones,
            'tipoCasa_id'=>$request->tCasa,
            'calle'=>$request->calle,
            'colonia'=>$request->colonia,
            'codigoPostal'=>$request->codigoPostal,
            'numExterior'=>$request->numExterior,
            'numInterior'=>$request->numInterior,
            'transporte_id'=>$request->transporte,
            'transporte'=>$ee2,
            'viajeMensual'=>$vm,
            'pagoMensual'=>$pm,
            'gastoMensual'=>$gm,
            'residencia'=>$rr,
            'tiempo'=>$request->tiempo,
            ]);
        spending::create([
            'usuario_id'=>Auth::user()->id,
            'ingresoMensual'=>$request->ingresoMensual,
            'gastoMensual'=>$request->gastoMensual,
            'noIntegrantes'=>$request->noIntegrantes,
            'apoyo'=>$request->apoyo,
            'trabajo'=>$request->trabajo,
            'dependencia'=>$de,
            ]);
        personal::create([
            'usuario_id'=>Auth::user()->id,
            'enfermedades'=>$enn,
            'telCasa'=>$request->telCasa,
            'telCelular'=>$request->telCelular,
            'nomTutor'=>$request->nomTutor,
            'telTutor'=>$request->telTutor,
            ]);

        $index = 4;
        session()->flash('message', 'Usuario '.$vm. ' actualizado correctamente');
        session()->flash('type', 'success');
        
        return redirect('/muestra');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
