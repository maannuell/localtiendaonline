<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormulariosController extends Controller
{
    //

    public function categorias()
	{
		return view('formularios.categorias');
	}

	public function subcategorias(){
		return view('formularios.subcategoria');
	}

	public function articulos(){
		return view('formularios.articulos');
	}
}
