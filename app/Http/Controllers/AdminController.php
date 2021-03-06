<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

use Hash;
use Carbon\Carbon;

class AdminController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = 5;
        $variable = 0;
        $user = \App\user::all();
        $tenement = \App\tenement::all();
        $dateSE = \App\startEndDate::all();

        return view('Admin.start',[
        'variable' => $variable,
        'index' => $index,
        'tenement'=>$tenement,
        'user'=>$user,
        'dateSE'=>$dateSE
        ]);
    }

    public function configIndex()
    {
        $index = -1;

        $user = \App\user::all();
        $tenement = \App\tenement::all();
        $carrer = \App\carrer::all();
        $place = \App\municipality::all();
        $state = \App\state::all();
        $beca = \App\studentGrant::all();
        $transport = \App\transport::all();
        $typeHouse = \App\typeHouse::all();

        return view('Admin.config', [
            'index'=>$index,
            'carrer'=>$carrer,
            'state'=>$state,
            'place'=>$place,
            'user'=>$user,
            'beca'=>$beca,
            'transport'=>$transport,
            'typeHouse'=>$typeHouse,
            'tenement'=>$tenement,
        ]);
    }

   public function checkPassword(Request $request, $variable){
        $this->validate($request, [
            'clave' => 'required',
        ]);
            
        if(Hash::check($request->clave, Auth::user()->password)){
           return redirect('/admin/config/insert/'.$variable);
        } else{
            return redirect('/admin/config')
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas D:',
            ]);
        }
    }

    public function chedkPasswordReset(Request $request, $variable){
        $this->validate($request, [
            'clave' => 'required',
        ]);
            
        if(Hash::check($request->clave, Auth::user()->password)){
            $index = 5;
            $user = \App\user::all();
            $tenement = \App\tenement::all();
            $personal = \App\personal::all();
            $record = \App\record::all();
            $spending = \App\spending::all();
            $dateSE = \App\startEndDate::all();

        return view('Admin.start',[
        'variable' => $variable,
        'index' => $index,
        'tenement'=>$tenement,
        'user'=>$user,
        'dateSE'=>$dateSE
        ]);

        } else{
            return redirect('/admin/')
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas D:',
            ]);
        }
    }
    
    public function getRegisterWindow($variable){
        $index = -1;

        return view('Admin.dialogBox', ['index'=>$index, 'variable'=>$variable]);
    }

    public function insertRegister(Request $request, $variable){
        //return redirect('/blocked');

        if($variable == 1){
            $this->validate($request, [
                'nombre' => 'required|min:5|max:255',
                'color' => 'required',
            ]);
        }else{
            $this->validate($request, [
                'nombre' => 'required|min:5|max:255',
            ]);
        }


        if($variable == 1){
           \App\carrer::create([
                'nombre' => $request->nombre,
                'color' => $request->color,
            ]);
        } elseif($variable == 2){
            \App\state::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 3){
            \App\municipality::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 4){
            \App\studentGrant::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 5){
            \App\transport::create([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 6){
            \App\typeHouse::create([
                'nombre' => $request->nombre,
            ]);
        }

        return redirect('/admin/config/insert/'. $variable);
    }

    public function updateRegister(Request $request, $variable){
        if($variable == 1){
            $this->validate($request, [
                'nombre' => 'required',
                'color' => 'required',
            ]);
        }else{
            $this->validate($request, [
                'nombre' => 'required',
            ]);
        }

        if($variable == 1){
            $carrer = \App\carrer::find($request->idVal);
            $carrer->update([
                'nombre' => $request->nombre,
                'color' => $request->color,
            ]);
        } elseif($variable == 2){
            $state = \App\state::find($request->idVal);
            $state->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 3){
            $municipality = \App\municipality::find($request->idVal);
            $municipality->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 4){
            $studentGrant = \App\studentGrant::find($request->idVal);
            $studentGrant->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 5){
            $transport = \App\transport::find($request->idVal);
            $transport->update([
                'nombre' => $request->nombre,
            ]);
        } elseif($variable == 6){
            $typeHouse = \App\typeHouse::find($request->idVal);
            $typeHouse->update([
                'nombre' => $request->nombre,
            ]);
        }

        return redirect('/admin/config/insert/'. $variable);
    }

    public function deleteRegister(Request $request, $variable){

        if($variable == 1){
            $carrer = \App\carrer::find($request->idVal2);
            $carrer->delete();
        } elseif($variable == 2){
            $state = \App\state::find($request->idVal2);
            $state->delete();
        } elseif($variable == 3){
            $municipality = \App\municipality::find($request->idVal2);
            $municipality->delete();
        } elseif($variable == 4){
            $studentGrant = \App\studentGrant::find($request->idVal2);
            $studentGrant->delete();
        } elseif($variable == 5){
            $transport = \App\transport::find($request->idVal2);
            $transport->delete();
        } elseif($variable == 6){
            $typeHouse = \App\typeHouse::find($request->idVal2);
            $typeHouse->delete();
        }

        return redirect('/admin/config/insert/'. $variable);
    }

    public function eliminarRegistros()
    {
        
      $personal = \App\personal::All();
        foreach($personal as $p)
        {
            $p->delete();
        }
        
      $record = \App\record::All();
        foreach($record as $r)
        {
            $r->delete();
        }
          
      $tenement = \App\tenement::All();
        foreach($tenement as $t)
        {
            $t->delete();
        }
        
      $spending = \App\spending::All();
        foreach($spending as $s)
        {
            $s->delete();
        }
        
      $user = \App\user::All();
        foreach($user as $u)
        {
            if($u->id==1)
            {
                
            }
            else
            {
                $u->delete();
            }
        }    
    }

    public function buscarRegistros()
    {
        $index = 5;
        return view('Admin.Buscar',[
            'index' => $index,
        ]); 
    }

    public function chedkPasswordDeleteUser(Request $request, $variable){
        $this->validate($request, [
            'clave' => 'required',
        ]);
            
        if(Hash::check($request->clave, Auth::user()->password)){
            $index = 5;

            $personal = \App\personal::where('usuario_id',$variable);
            $personal->delete();

            $record = \App\record::where('usuario_id',$variable);
            $record->delete();
              
            $tenement = \App\tenement::where('usuario_id',$variable);
            $tenement->delete();
            
            $spending = \App\spending::where('usuario_id',$variable);
            $spending->delete();

            $user = \App\user::where('id',$variable);
            $user->delete();

            session()->flash('message', 'Se a eliminado el registro con exito');
            session()->flash('type', 'success');

        return view('Admin.Buscar',[
            'index' => $index,
        ]);

        } else{
            return redirect('/admin/search')
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas D:',
            ]);
        }
    }

    public function getRegistros(Request $request){
        $index = 5;

        switch($request->opc){
            case 1:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);

                $user = \App\User::where('nombre','like','%'.$request->busqueda.'%')->where('tipo', 2)->get();

                if(count($user) == 0){

                    $user = \App\User::where('apellidoPaterno','like','%'.$request->busqueda.'%')->where('tipo', 2)->get();
                    
                    if(count($user) == 0){

                    $user = \App\User::where('apellidoMaterno','like','%'.$request->busqueda.'%')->where('tipo', 2)->get();
                    
                    $residuo = explode(" ",$request->busqueda);

                        if(count($residuo) > 1 && count($residuo) <= 2){
                             $user = \App\User::where('nombre','like','%'.$residuo[0].'%')->where('apellidoPaterno','like','%'.$residuo[1].'%')->where('tipo', 2)->get();
                        }
                    
                    }
                }

                return view('Admin.Buscar', ['index'=>$index, 'user'=>$user]);
            break;
            case 2:
                $this->validate($request, [
                    'busqueda' => 'required'
                ]);
                
                $user = \App\User::where('boleta',$request->busqueda)->where('tipo', 2)->get();

                if(count($user) == 0){
                    session()->flash('message', 'No se encontró ningun registro con la boleta: '.$request->busqueda);
                    session()->flash('type', 'danger');
                }

                return view('Admin.Buscar', ['index'=>$index, 'user'=>$user]);
            break;
        }
        
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
        $this->validate($request, [
           
            'Date1'=>'required|date',
            'Date2'=>'required|date',

        ]);

        $input = 'd-m-Y';
        $date = $request->input('Date1');
        $output = 'Y-m-d';

        $input2 = 'd-m-Y';
        $date2 = $request->input('Date2');
        $output2 = 'Y-m-d';

        $dateFormated = Carbon::createFromFormat($input, $date)->format($output);
        $dateFormated2 = Carbon::createFromFormat($input2, $date2)->format($output2);

        if($dateFormated <= $dateFormated2)
        {
            session()->flash('message', 'Se a actualizado las Fechas ');
            session()->flash('type', 'aquamarine');

            $dateES = \App\startEndDate::find(1);
            $dateES->update([
                'fechaInicio' => $dateFormated,
                'fechaFin' => $dateFormated2
            ]);
        }
        else
        {
            session()->flash('message', 'La Fecha Fin es Inferior a la Fecha Inicio');
            session()->flash('type', 'danger');
        }
        
        return redirect('/admin');
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
