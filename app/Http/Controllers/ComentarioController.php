<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Comentario;

class ComentarioController extends Controller
{
    //
    public function consultar(){

$user = Auth::user();

$comentario=DB::table('comentarios As c')
->join('users As u','u.id','=','c.id_usuario')
->join('articulos As a','a.id','=','c.id_articulo')
->select('c.id','u.name','a.nombre','c.descripcion')
->get();


   return view ('formularios.listadocomen',compact('comentario','user'));
}

  public function eliminar($id){
        Comentario::find($id)->delete();
        return Redirect('/consultacomentario');
}
}
