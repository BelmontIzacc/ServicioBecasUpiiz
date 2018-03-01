<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Hash;

class shareController extends Controller
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

    public function profile($type)
    {
        $index = -1;

        $user = Auth::user();

        if($type == 1)
        { //return Admin profile
            $urlToCancel = '/admin';
          return view('Admin.profile', [
              'index'=>$index,
              'user'=>$user,
              'type'=>$type,
              'urlToCancel'=>$urlToCancel,
          ]);
        }

    }

    public function profilePassword(Request $request, $type)
    {
        $this->validate($request, [
            'clave' => 'required',
        ]);

        if(Hash::check($request->clave, Auth::user()->password)){
            $index = -1;

            $edit = true;
            $user = Auth::user();

            if($type == 1){ //return Admin profile
                $urlToCancel = '/admin';
              return view('Admin.profile', [
                  'index'=>$index,
                  'user'=>$user,
                  'edit'=>$edit,
                  'type'=>$type,
                  'urlToCancel'=>$urlToCancel,
              ]);
            }
        } else{
            return redirect('/person/profile/'.$type)
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas',
            ]);
        }
    }

    public function editProfile(Request $request, $type)
    {
        $this->validate($request, [
            'nombre' => 'required|min:3|max:50',
            'apellidoPaterno' => 'required|min:3|max:50',
            'apellidoMaterno' => 'required|min:3|max:50',
            'identificacion' => 'required|same:identificacion2|max:12|:min:5',
            'identificacion2' => 'required',
            'clave' => 'required|same:clave2|min:5|max:30',
            'clave2' => 'required',
        ]);

        $user = Auth::user();

        $user->update([
            'nombre' => $request->nombre,
            'apellidoPaterno' => $request->apellidoPaterno,
            'apellidoMaterno' => $request->apellidoMaterno,
            'boleta' => $request->identificacion,
            'password' => bcrypt($request->clave),
            'edad' => '00',
            'grupo' => 'Admin',
            'semestre' => 'Admin',
        ]);

        session()->flash('message', 'Usuario '.$user. ' actualizado correctamente');
        session()->flash('type', 'success');

        return redirect('/person/profile/'.$type);
    }

    public function index()
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
