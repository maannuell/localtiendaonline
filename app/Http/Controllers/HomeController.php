<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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
        $countcarrito = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();

 $artdescuento=DB::table('articulos')
->orderBy('promo', 'desc')
->limit(3)
->get();

$artvisitas=DB::table('articulos')
->orderBy('visitas', 'desc')
->limit(3)
->get();




        return view('index',compact('countcarrito','artdescuento','artvisitas'));
    }
}
