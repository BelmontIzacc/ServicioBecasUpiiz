<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\user;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class welcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index=1;
        Auth::logout();
        $dateSE = \App\startEndDate::all();
        $dateA = Carbon::now();
        $dateA = $dateA->format('Y-m-d');

        

         $fecha_inicio = strtotime($dateSE->find(1)->fechaInicio->format('Y-m-d'));
         $fecha_fin = strtotime($dateSE->find(1)->fechaFin->format('Y-m-d'));
         $fecha = strtotime($dateA);

         if(($fecha >= $fecha_inicio) && ($fecha <= $fecha_fin))
            $valor=1;
         else
             $valor=2;

        return view('welcome', [
        'index'=>$index,
        'valor' =>$valor
        ]);
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
        user::create($request->all());
        return view('layout');
    }
    public function stop()
    {
        $index = 4;
        return view('errors.unavailable', ['index'=>$index]);
    }
    public function night()
    {
        //
        $index = -1;

        return view('Admin.night', ['index'=>$index]);
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
