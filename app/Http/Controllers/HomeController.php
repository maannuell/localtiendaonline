<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

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
 if (Auth::guest()){
$countcarrito = 0;

 $artdescuento=DB::table('articulos')
->orderBy('promo', 'desc')
->limit(5)
->get();

$artvisitas=DB::table('articulos')
->orderBy('visitas', 'desc')
->limit(5)
->get();




        return view('index',compact('countcarrito','artdescuento','artvisitas'));

  }else{

    $iduser = Auth::user()->id;
$countcarrito = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();

 $artdescuento=DB::table('articulos')
->orderBy('promo', 'desc')
->limit(5)
->get();

$artvisitas=DB::table('articulos')
->orderBy('visitas', 'desc')
->limit(5)
->get();




        return view('index',compact('countcarrito','artdescuento','artvisitas'));
    }
    }
}
