<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subcategoria;
class SubcategoriaController extends Controller
{
    //
	public function guardar(Request $datos){
		$nuevo= new Subcategoria();
        $nuevo->nombre=$datos->input('nombre');
        $nuevo->descripcion=$datos->input('descripcion');
        $nuevo->id_categoria=$datos->input('categoria');
        $nuevo->save();

        return Redirect('subcategorias');
	}

}
