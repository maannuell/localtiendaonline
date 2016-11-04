<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriasController extends Controller
{
    //

    public function guardar(Request $datos){
       $nuevo= new Categoria();
       $nuevo->nombre=$datos->input('nombre');
       $nuevo->descripcion=$datos->input('descripcion');
       $nuevo->save();

       return Redirect('categorias');
    }

     

}
