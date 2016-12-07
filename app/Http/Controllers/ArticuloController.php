<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articulo;
use App\Subcategoria;
use DB;
use App\Comentario;
use Auth;
use App\Ordene;
use App\Cartemplat;

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

public function seleciudad($id){

   $seleciudades=DB::table('ciudades')
   ->select('id','nombre')
   ->where('id_estado','=', $id)
   ->get();

   return \Response::json($seleciudades);

}

public function ver($id){

  $articulo=DB::table('articulos')
  ->select('id','nombre','descripcion','precio','imagen','existencia','promo')
  ->where('id_subcategoria','=',$id)
  ->paginate(3);

  $artvisitas=DB::table('articulos')
->orderBy('visitas', 'desc')
->limit(5)
->get();

 if (Auth::guest()){
  return view('productos',compact('articulo','artvisitas'));
 }else{
$iduser = Auth::user()->id;


$countcarrito = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();

 

$articuloscar=DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select('a.*','c.idpartida','c.estatus','c.id_cliente')
->get();

$total = DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select(DB::raw('sum(a.precio-(a.precio*a.promo)) as todo'))
->get();






   return view('productos',compact('articulo','countcarrito','articuloscar','total','artvisitas'));

 }

}


public function vermarca($idmarca){


  $articulo=DB::table('articulos')
  ->select('id','nombre','descripcion','precio','imagen','existencia','promo')
  ->where('id_marca','=',$idmarca)
  ->paginate(3);

  $artvisitas=DB::table('articulos')
->orderBy('visitas', 'desc')
->limit(5)
->get();

 if (Auth::guest()){
  return view('productos',compact('articulo','artvisitas'));
 }else{
$iduser = Auth::user()->id;


$countcarrito = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();

 

$articuloscar=DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select('a.*','c.idpartida','c.estatus','c.id_cliente')
->get();

$total = DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select(DB::raw('sum(a.precio-(a.precio*a.promo)) as todo'))
->get();


   return view('productos',compact('articulo','countcarrito','articuloscar','total','artvisitas'));

 }
  
}

public function detaver($id){
   
   $visitasactual=DB::table('articulos')
   ->where('id','=', $id)
   ->select('visitas')
   ->first();

   
   $visitastotal=$visitasactual->visitas+1; 

  DB::table('articulos')
            ->where('id', $id)
            ->update(['visitas' => $visitastotal]);


   $count=DB::table('comentarios')->where('id_articulo','=', $id)->count();
   


   $comentario=DB::table('comentarios As c')
   ->join('users As u', 'u.id','=','c.id_usuario')
   ->where('id_articulo','=', $id)
   ->select('c.*','u.name','u.imagen')
   ->get();


  $articulo=DB::table('articulos')
  ->select('id','nombre','descripcion','precio','imagen','existencia','promo')
  ->where('id','=',$id)
  ->first();

if (Auth::guest()){

 return view('prodetalle',compact('articulo','comentario','count'));
}else{

  $iduser = Auth::user()->id;

  $countcarrito = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();

 

$articuloscar=DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select('a.*','c.idpartida','c.estatus','c.id_cliente')
->get();

$total = DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select(DB::raw('sum(a.precio-(a.precio*a.promo)) as todo'))
->get();

   
   return view('prodetalle',compact('articulo','comentario','count','countcarrito','articuloscar','total'));
}




}

public function comentarioguarda($id,Request $datos){

   $nuevo= new Comentario();
   $user = Auth::user();
   $nuevo->id_articulo=$id;
   $nuevo->id_usuario=$user->id;
   $nuevo->descripcion=$datos->input('descripcion');
   $nuevo->save();

   return Redirect('/detaproducto/'.$id);



}
public function coninventario(){

$user = Auth::user();

    $articulo=DB::table('articulos As a')
    ->join('subcategorias As s','s.id','=','a.id_subcategoria')
    ->join('marcas As m','m.id','=','a.id_marca')
    ->select('a.*','m.nombre As nombre_marca','s.nombre As nombre_subcategoria subcategoria')
    ->get();

  

    return view('formularios.inventarioarticulos',compact('articulo','user'));

}
public function agregainventario($id, Request $datos){

   $articulo=DB::table('articulos')
   ->select('existencia')
   ->where('id','=', $id)
   ->first();

  

  $existencia=$datos->input('existencia');
   
  $valor=$articulo->existencia+$existencia; 
  

  DB::table('articulos')
            ->where('id', $id)
            ->update(['existencia' => $valor]);

      return Redirect('/consultainventario');
}

public function carritocompras($id){

$idcategoria=DB::table('articulos')
->select('id_subcategoria')
->where('id','=', $id)
->first();




if (Auth::guest()){
  return Redirect('/registrarse');

} else {


$iduser = Auth::user()->id;
$countexiste = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->where('id_articulo','=', $id)
 ->count();

 if ($countexiste>0){
  return Redirect('/verproductos/'.$idcategoria->id_subcategoria);
}else {






$date=date('Y-m-n');




  $nuevo= new Cartemplat();
  $nuevo->id_articulo=$id;
  $nuevo->id_cliente=$iduser;
  $nuevo->cantidad=1;
  $nuevo->estatus=0;
  $nuevo->save();
   
   return Redirect('/verproductos/'.$idcategoria->id_subcategoria);
}   
}


}

public function acarritodetalle($id){
if (Auth::guest()){
  return Redirect('/registrarse');

} else {



$iduser = Auth::user()->id;
$countexiste = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->where('id_articulo','=', $id)
 ->count();

if($countexiste>0){

  return Redirect('/detaproducto/'.$id);

}else {


$date=date('Y-m-n');





  $nuevo= new Cartemplat();
  $nuevo->id_articulo=$id;
  $nuevo->id_cliente=$iduser;
  $nuevo->cantidad=1;
  $nuevo->estatus=0;
  $nuevo->save();
   
   return Redirect('/detaproducto/'.$id);
    } 
}


}

public function modales($id ){
  


  return Articulo::find($id);
}

  public function busqueda($search){

      $search = urldecode($search);
      
      $articulo=DB::table("articulos")
      ->where('nombre', 'LIKE', '%'.$search.'%')
      ->orderBy('id','desc')
      ->paginate(3);

      $artvisitas=DB::table('articulos')
->orderBy('visitas', 'desc')
->limit(5)
->get();

      if (Auth::guest()){
  return view('productos',compact('articulo','artvisitas'));
 }else{
$iduser = Auth::user()->id;


$countcarrito = DB::table('cartemplate')
 ->where('estatus','=','0')
 ->where('id_cliente','=', $iduser)
 ->count();

 

$articuloscar=DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select('a.*','c.idpartida','c.estatus','c.id_cliente')
->get();

$total = DB::table('cartemplate As c')
->join('articulos As a','a.id','=','c.id_articulo')
->where('c.estatus','=','0')
->where('c.id_cliente','=', $iduser)
->select(DB::raw('sum(a.precio-(a.precio*a.promo)) as todo'))
->get();



   return view('productos',compact('articulo','countcarrito','articuloscar','total','artvisitas'));

  }

 }
}
