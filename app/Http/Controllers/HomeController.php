<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countcarrito = DB::table('ordenes')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();


        return view('index',compact('countcarrito'));
    }
}
