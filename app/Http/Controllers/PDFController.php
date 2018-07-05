<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use PDF;
use App\user;
use Auth;
use Hash;
use Carbon\Carbon;

class PDFController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getPDF()
    {
        $student = Auth::user();
        //$student = user::find(2);
        setlocale(LC_TIME, 'Spanish');
        $date = carbon::now();

        $pdf = PDF::loadView('constancia',['student'=>$student,'date'=>$date]);
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
        //$student = user::find(2);
        setlocale(LC_TIME, 'Spanish');
        $date = carbon::now();

        return view('vista',['index'=>$index,'student'=>$student,'date'=>$date]);
    }
}
