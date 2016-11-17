<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Marca;
use App\Subcategoria;
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

    	if ($user->id>1){
    		return Redirect('/');
    	}else{
    return view ('admin', compact('user'));		
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
}
