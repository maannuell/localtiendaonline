<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;
use App\Marca;
use App\Subcategoria;

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
		$marca=Marca::all();
		$subcategoria=Subcategoria::all();
		return view('formularios.articulos',compact('marca','subcategoria'));
	}

	public function marcas(){
		return view ('formularios.marcas');
	}
}
