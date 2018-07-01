<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\user;
use Auth;
use Hash;

class PDFController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getPDF()
    {
        $pdf = PDF::loadView('constancia');
        return $pdf->download('constancia.pdf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $index = 4;
        $student = Auth::user();

        return view('vista',['index'=>$index,'student'=>$student]);
    }
}
