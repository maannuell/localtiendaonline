<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Subcategoria;
use DB;

class ArticuloController extends Controller
{
    //

    public function guardar(Request $datos){

            //obtenemos el campo file definido en el formulario
       $file = $datos->file('file');
 
       //obtenemos el nombre del archivo
       $nombre = $file->getClientOriginalName();
 
       //indicamos que queremos guardar un nuevo archivo en el disco local
       \Storage::disk('local')->put($nombre,  \File::get($file));
       
     

   

    	$nuevo= new Articulo();
        $nuevo->nombre=$datos->input('nombre');
        $nuevo->descripcion=$datos->input('descripcion');
        $nuevo->precio=$datos->input('precio');
        $nuevo->id_subcategoria=$datos->input('subcategoria');
        $nuevo->id_marca=$datos->input('marca');
        $nuevo->imagen=$nombre;
        $nuevo->existencia=$datos->input('existencia');
        $nuevo->promo=$datos->input('promo');
        $nuevo->save();

        return Redirect('articulos');
    }



public function drop($id){
    
    $subcategorias =DB::table('subcategorias')
    ->select('id','nombre')
    ->where('id_categoria','=',$id)
    ->get();
   
   return \Response::json($subcategorias);

}

 
}
