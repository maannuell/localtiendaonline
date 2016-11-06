<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
class ArticuloController extends Controller
{
    //

    public function guardar(Request $datos){

    	$nuevo= new Articulo();
        $nuevo->nombre=$datos->input('nombre');
        $nuevo->descripcion=$datos->input('descripcion');
        $nuevo->precio=$datos->input('precio');
        $nuevo->id_subcategoria=$datos->input('subcategoria');
        $nuevo->id_marca=$datos->input('marca');
        $nuevo->save();

        return Redirect('articulos');
    }
}
