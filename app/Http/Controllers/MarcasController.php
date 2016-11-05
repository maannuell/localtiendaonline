<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcasController extends Controller
{
    //

    public function guardar(Request $datos){
          $nuevo=new Marca();
          $nuevo->nombre=$datos->input('nombre');
          $nuevo->descripcion=$datos->input('descripcion');
          $nuevo->save();


    	 return Redirect('marcas');
    }
}
