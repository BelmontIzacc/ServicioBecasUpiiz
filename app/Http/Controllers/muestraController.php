<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\user;

use Auth;

use Hash;

class muestraController extends Controller
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
        $index = 4;
        $student = Auth::user();

        return view('muestra',['index'=>$index,'student'=>$student]);
    }
    public function editar()
    {
        $index = 4;
        $student = Auth::user();
        $antecedentes = \App\record::lists('actualBeca','id');
        $beca = \App\studentGrant::lists('nombre', 'id');
        $beca2 = \App\studentGrant::lists('id','nombre');
        $estado = \App\state::lists('nombre', 'id');
        $municipio = \App\municipality::lists('nombre', 'id');
        $tCasa = \App\typeHouse::lists('nombre', 'id');
        $transporte = \App\transport::lists('nombre', 'id');
        $carrera = \App\carrer::lists('nombre','id');

        return view('editar',['index'=>$index,'student'=>$student,'beca'=>$beca,'estado'=>$estado,'municipio'=>$municipio,'tCasa'=>$tCasa,'transporte'=>$transporte,'carrera'=>$carrera,'antecedentes'=>$antecedentes,'beca2'=>$beca2]);
    }
    public function update(Request $request)
    {
        $this->validate($request,[
//////////////////////////////////////////////////////
////////////////Primera Parte/////////////////////////
//////////////////////////////////////////////////////
                'nombre'=>'required|min:1|max:50',
                'apellidoPaterno'=>'required|min:1|max:50|alpha',
                'apellidoMaterno'=>'required|min:1|max:50|alpha',
                'edad'=>'required|integer|between:0,100',
                'boleta'=>'required|min:10',
                'carrera'=>'required',
                'grupo'=>'required|max:4',
                'semestre'=>'required|integer',
//////////////////////////////////////////////////////
////////////////Segunda Parte/////////////////////////
//////////////////////////////////////////////////////
                'promActual'=>'required|numeric|between:0,10',
                'beca'=>'required',
                'becaA' =>'required',
                'actualBeca'=>'required_if:becaA,si',
                'lic'=>'required',
                'licenciatura'=>'required_if:lic,si',
                'historiaAC'=>'required|between:1,2',
//////////////////////////////////////////////////////
////////////////Tercera Parte/////////////////////////
//////////////////////////////////////////////////////
                'estado'=>'required',
                'municipio'=>'required',
                'habitantes'=>'required|integer',
                'habitaciones'=>'required|integer',
                'tCasa'=>'required',
                'residencia'=>'required|between:1,3',
                'pagoMensual'=>'required_if:residencia,3',
                'calle'=>'required|max:50',
                'colonia'=>'required|max:50',
                'codigoPostal'=>'required|max:8',
                'numInterior'=>'max:8',
                'numExterior'=>'required|max:8',
                'tiempo'=>'required|between:1,11',
                'transporte'=>'required',
                'viajeMensual'=>'required_unless:municipio,58,municipio,17|integer',
                'transporte2'=>'required_unless:municipio,58,municipio,17',
                'gastoMensual2'=>'required_unless:municipio,58,municipio,17|integer',
//////////////////////////////////////////////////////
////////////////Cuarta Parte/////////////////////////
//////////////////////////////////////////////////////
                'ingresoMensual'=>'required|max:30',
                'gastoMensual'=>'required|max:30',
                'noIntegrantes'=>'required|integer|max:11',
                'apoyo'=>'required|integer|max:11',
                'trabajo'=>'required',
                'dependencia'=>'required|between:1,4',
//////////////////////////////////////////////////////
////////////////Quinta Parte/////////////////////////
//////////////////////////////////////////////////////
                'telCasa'=>'required',
                'telCelular'=>'required',
                'nomTutor'=>'required',
                'telTutor'=>'required',
                'enfe'=>'required',
                'enfermedades'=>'required_if:enfe,si',
            ]);
////////////////Primera Parte/////////////////////////
////////////////Segunda Parte/////////////////////////
        $bb = $request->actualBeca;
        $es = \App\studentGrant::find($bb);
        $regular = $request->historiaAC;

        if ($regular == 1) {
            $letra = "Regular";
        }else{
            $letra = "Irregular";
        }

        if($request->becaA=='si'){
            $es2 = $es->nombre;
        }else{
            $es2 = "";
        }

        if($request->lic == 'no'){
            $licenciatura = "";
        }else{
            $licenciatura = $request->licenciatura;
        }
////////////////Tercera Parte/////////////////////////
        $r = $request->residencia;
        $pm = $request->pagoMensual;
        $dd = $request->transporte2;
        $m = $request->municipio;
        $vm = $request->viajeMensual;
        $gm = $request->gastoMensual2;

        if ($r==1) {
            $rr = "Permanente";
        }elseif ($r==2) {
            $rr = "Prestada";
        }elseif ($r==3) {
            $rr = "Rentada";
        }

        if($r==3){}else{
            $pm = "";
        }

        $ee = \App\transport::find($dd);
        if ($ee=="") {
            $ee2 = "";
        }else{
            $ee2 = $ee->nombre;
        }

        if ($m == 58 || $m == 17) {
            $vm = "";
            $gm = "";
            $ee2= "";
        }
////////////////Cuarta Parte//////////////////////////
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
////////////////Quinta Parte//////////////////////////
        $en = $request->enfe;
        $enn = $request->enfermedades;

        if ($en=="no") {
            $enn="";
        }

        $licen = $licenciatura;
        $licen = ucwords($licen);

        $call = $request->calle;
        $call = ucwords($call);

        $colon = $request->colonia;
        $colon = ucwords($colon);

        $nomTu = $request->nomTutor;
        $nomTu = ucwords($nomTu);

        $numIn = $request->numInterior;
        $numIn = strtoupper($numIn);

        $numExt = $request->numExterior;
        $numExt = strtoupper($numExt);

        $user = user::find($request->studentId);
        $user->update([
                'nombre'=>$request->nombre,
                'apellidoPaterno'=>$request->apellidoPaterno,
                'apellidoMaterno'=>$request->apellidoMaterno,
                'edad'=>$request->edad,
                'boleta'=>$request->boleta,
                'carrera_id'=>$request->carrera,
                'grupo'=>$request->grupo,
                'semestre'=>$request->semestre,
            ]);

        $record = $user->antecedentes;
        $record->update([
            'promActual'=>$request->promActual,
            'beca_id'=>$request->beca,
            'actualBeca'=>$es2,
            'licenciatura'=>$licen,
            'historiaAC' =>$letra,
            ]);

        $tenement = $user->vivienda;
        $tenement->update([
            'municipio_id'=>$request->municipio,
            'estado_id'=>$request->estado,
            'habitantes'=>$request->habitantes,
            'habitaciones'=>$request->habitaciones,
            'tipoCasa_id'=>$request->tCasa,
            'residencia'=>$rr,
            'pagoMensual'=>$pm,
            'calle'=>$call,
            'colonia'=>$colon,
            'codigoPostal'=>$request->codigoPostal,
            'numExterior'=>$numExt,
            'numInterior'=>$numIn,
            'tiempo'=>$request->tiempo,
            'transporte_id'=>$request->transporte,
            'transporte'=>$ee2,
            'viajeMensual'=>$vm,
            'gastoMensual'=>$gm,
            ]);

        $spending = $user->gasto;
        $spending->update([
            'ingresoMensual'=>$request->ingresoMensual,
            'gastoMensual'=>$request->gastoMensual,
            'noIntegrantes'=>$request->noIntegrantes,
            'apoyo'=>$request->apoyo,
            'trabajo'=>$request->trabajo,
            'dependencia'=>$de,
            ]);
        $personal = $user->personales;
        $personal->update([
            'telCasa'=>$request->telCasa,
            'telCelular'=>$request->telCelular,
            'nomTutor'=>$nomTu,
            'telTutor'=>$request->telTutor,
            'enfermedades'=>$enn,
            ]);

        session()->flash('message', 'Alumno '.$user. ' actualizado correctamente');
        session()->flash('type', 'success');
        return redirect('/muestra');
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
        //
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
