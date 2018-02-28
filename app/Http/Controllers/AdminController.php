<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Collection;

use Hash;

class AdminController extends Controller
{

    public function __construct()
    {
       $this->middleware('auth');
        //$this->middleware('admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = 5;
        $tenement = \App\tenement::all();

        return view('Admin.start',[
        'index' => $index,
       'tenement'=>$tenement,
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

    public function checkPassword(Request $request, $variable)
    {
        $this->validate($request, [
            'password' => 'required',
        ]);

            return redirect('/admin/config')
            ->withErrors([
                $request->clave => 'No coinciden las contraseñas',
            ]);
        }
    
    public function getRegisterWindow($variable){
        $index = -1;

        return view('Admin.dialogBox', ['index'=>$index, 'variable'=>$variable]);
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
