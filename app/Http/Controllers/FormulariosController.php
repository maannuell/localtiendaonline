<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Marca;
use App\Subcategoria;
use DB;
use Auth;

class FormulariosController extends Controller
{
    //

    public function __construct()
{
             

    $this->middleware('auth');
}



    public function admi(){

    	$user = Auth::user();

    	if ($user->rol>1){
    		return Redirect('/');
    	}else{
    return view ('formularios.admininicio', compact('user'));		
    	}
       


     
    }
 public function excel(){
 	$user = Auth::user();

 	 return view('formularios.cargaarticulos', compact('user'));
 }
    public function categorias()
	{
		$user =Auth::user();
		
		return view('formularios.categorias', compact('user'));
	}

	public function subcategorias(){
		$categoria=Categoria::all();
		$user= Auth::user();
		return view('formularios.subcategoria',compact('categoria','user'));
	}



	public function articulos(){
		$marca=Marca::all();
		$categoria=Categoria::all();
		$subcategoria=Subcategoria::all();
		$user =Auth::user();
		return view('formularios.articulos',compact('marca','subcategoria','categoria','user'));
	}

	public function marcas(){
		$user=  Auth::user();
		return view ('formularios.marcas',compact('user'));
	}
	public function usuarios(){
		$user = Auth::user();
		return view('formularios.altausuarios',compact('user'));
	}

public function index(){

$iduser = Auth::user()->id;


$countcarrito = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();

 

$articuloscar=DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select('a.*','c.idpartida','c.estatus','c.id_cliente')
->get();

$total = DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select(DB::raw('sum(a.precio-(a.precio*a.promo)) as todo'))
->get();


$artdescuento=DB::table('articulos')
->orderBy('promo', 'desc')
->limit(5)
->get();

$artvisitas=DB::table('articulos')
->orderBy('visitas', 'desc')
->limit(5)
->get();




	return view('index',compact('countcarrito','articuloscar','total','artdescuento','artvisitas'));
}


public function ircar(){

if (Auth::guest()){
  return Redirect('/registrarse');

} else {

	$iduser = Auth::user()->id;


$countcarrito = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();

 

$articuloscar=DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select('a.*','c.idpartida','c.estatus','c.id_cliente','c.cantidad')
->get();

$total = DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select(DB::raw('sum(a.precio-(a.precio*a.promo)) as todo'))
->get();
		return view('carrito',compact('countcarrito','articuloscar','total'));
	}
	}
	
}
