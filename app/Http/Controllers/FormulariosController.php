<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class FormulariosController extends Controller
{
    //

    public function categorias()
	{
		
		return view('formularios.categorias');
	}

	public function subcategorias(){
		$categoria=Categoria::all();
		return view('formularios.subcategoria',compact('categoria'));
	}

	public function articulos(){
		return view('formularios.articulos');
	}

	public function marcas(){
		return view ('formularios.marcas');
	}
}
