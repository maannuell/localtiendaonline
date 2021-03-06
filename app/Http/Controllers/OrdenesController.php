<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordene;
use App\Cartemplat;
use DB;
use Auth;
use App\detalle_orden;
use App\Estado;
use App\Ciudad;
use App\Paquete;
use Mail;
use App\User;
class OrdenesController extends Controller
{
    //

    public function eliminarcompra($id){
           DB::table('cartemplate')->where('idpartida', '=', $id)->delete();
        return Redirect('/');
    }

    public function cantidad($ca , $id){

$iduser = Auth::user()->id;
       
       DB::table('cartemplate')
            ->where('id_articulo', $id)
            ->where('estatus', '=', 0)
            ->where('id_cliente', '=', $iduser)
            ->update(['cantidad' => $ca]);




    }
    public function continuar(){


    	$iduser = Auth::user()->id;

      $partida=DB::table('cartemplate')
      ->where('estatus', '=' , 0)
      ->where('id_cliente', '=' , $iduser)
      ->get();
     

       
    foreach ($partida As $p) {
    $si = 0;   
    $existencia=DB::table('articulos')
    ->select('existencia')
    ->where('id', '=', $p->id_articulo)
    ->first();
      
    if($existencia->existencia<$p->cantidad){
       $si = $si +1;
    }else{
    	 
    }
       
       }
      
      if ($si>0){
      	return Redirect('/ircarrito');
        //return redirect()->back()->with('success', ['your message,here']); 
      }else {
	$date=date('Y-m-d');

      	$orden = new Ordene();
      	$orden->id_cliente=$iduser;
      	$orden->fecha=$date;
      	$orden->estatus=1;
        $orden->save();

        $idorden=DB::table('ordenes')
        ->select('id')
        ->where('id_cliente', '=', $iduser)
        ->where('estatus','=', 1)
        ->first();

        
        foreach ($partida as $p) {
 $preciouni=DB::table('articulos')
 ->select(DB::raw('(precio-(precio*promo)) as todo'))
 ->where('id','=',$p->id_articulo)
 ->first();

         
          $detorden = new detalle_orden();
          $detorden->id_orden=$idorden->id;
          $detorden->id_articulo=$p->id_articulo;
          $detorden->preciouni=$preciouni->todo;
          $detorden->cantidad=$p->cantidad;
          $detorden->save();

$exist=DB::table('articulos')
->select('existencia')
->where('id','=', $p->id_articulo)
->first();

DB::table('articulos')
->where('id','=',$p->id_articulo)
->update(['existencia' => $exist->existencia-$p->cantidad]);

        
        	
        }

DB::table('cartemplate')
->where('id_cliente','=', $iduser)
->where('estatus','=',0)
->update(['estatus' => 1]);
DB::table('ordenes')
->where('id','=',$idorden->id)
->update(['estatus' => 2]);

return Redirect("/confirmcarrito/".$idorden->id);







      }

   }



public function visconfirm($idorden){



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


  $estados=Estado::all();
  $ciudades=Ciudad::all();
  $paqueteria=Paquete::all();

  $ordendetalle=DB::table('detalle_orden AS d')
  ->join('articulos As a','a.id','=','d.id_articulo')
  ->where('id_orden','=', $idorden)
  ->get();

  $sumtotal=DB::table('detalle_orden')
  ->where('id_orden','=', $idorden)
  ->select(DB::raw('sum(preciouni*cantidad) as sumtotal'))
  ->first();




return view('carritoconfir',compact('articuloscar','countcarrito','total','estados','ciudades','paqueteria','ordendetalle','sumtotal','idorden'));

	
}

public function terminar($id, Request $datos){

     $orden=Ordene::find($id);
     $orden->id_paqueteria=$datos->input('paqueteria');
     $orden->id_ciudad=$datos->input('ciudad');
     $orden->direnvio=$datos->input('direccion');
     $orden->estatus=3;
     $orden->save();
     

     return Redirect("/pruebacorreo/".$id);

}

public function vistaconsulta(){

  $user = Auth::user();

$ordenes=DB::table('ordenes As o')
->join('users As u','u.id','=','o.id_cliente')
->join('paqueterias As p','p.id','=','o.id_paqueteria')
->join('ciudades As c','c.id','=','o.id_ciudad')
->select('o.*','o.id As o_id','u.*','p.nombre as nombre_paquete','c.nombre As nombre_ciudad')
->whereIn('o.estatus', ['3', '4'])
->get();
 


   return view ('formularios.listadoorden',compact('ordenes','user'));
}

public function miscompraso(){
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



  $ordenes=DB::table('ordenes As o')
->join('users As u','u.id','=','o.id_cliente')
->join('paqueterias As p','p.id','=','o.id_paqueteria')
->join('ciudades As c','c.id','=','o.id_ciudad')
->select('o.*','o.id As o_id','u.*','p.nombre as nombre_paquete','c.nombre As nombre_ciudad')
->where('o.id_cliente','=',$iduser)
->whereIn('o.estatus', ['3', '4'])
->get();


 return view('vmiscompras',compact('countcarrito','articuloscar','total','ordenes'));
}


public function fechaentrega($id , Request $datos){


     $orden=Ordene::find($id);
     $orden->fecha_envio=$datos->input('fecha_envio');
     $orden->estatus=4;
     
      if($orden->save()){

         return back()->with('si','datos Guardados');
       } else {
         return back()->with('no','eror al guardar');
       }
     
     

}

public function correo($idorden){
  $iduser = Auth::user()->id;
   $user=user::find($iduser);
   $orden=Ordene::find($idorden);
   $detalle=DB::table('detalle_orden As o')
   ->join('articulos As a','a.id','=','o.id_articulo')
   ->where('id_orden','=',$idorden)
   ->get();

  $sumtotal=DB::table('detalle_orden')
  ->where('id_orden','=', $idorden)
  ->select(DB::raw('sum(preciouni*cantidad) as sumtotal'))
  ->first();
  
  
       
  Mail::send('emails.prueba', ['user' => $user,'detalle' => $detalle,'sumtotal' => $sumtotal], function ($m) use ($user, $detalle) {
            

            $m->to($user->email, $user->name)->subject('Detalle de Compra');
        });

   return Redirect("/");
  
}

public function pdfordenes($idorden){
  

   $iduser=DB::table('ordenes')
   ->select('id_cliente')
   ->where('id','=',$idorden)
   ->first();
   $user=user::find($iduser->id_cliente);
   $orden=Ordene::find($idorden);
   $detalle=DB::table('detalle_orden As o')
   ->join('articulos As a','a.id','=','o.id_articulo')
   ->where('id_orden','=',$idorden)
   ->get();

   $generales=DB::table('ordenes As o')
   ->join('paqueterias As p','p.id','=','o.id_paqueteria')
   ->join('ciudades As c','c.id','=','o.id_ciudad')
   ->select('o.*','p.nombre AS nombrepaquete','c.nombre As ciudadnombre')
   ->where('o.id','=',$idorden)
   ->first();
   

  $sumtotal=DB::table('detalle_orden')
  ->where('id_orden','=', $idorden)
  ->select(DB::raw('sum(preciouni*cantidad) as sumtotal'))
  ->first();

     $vista=view('pdf.pdfcompra',compact('user','orden','detalle','sumtotal','generales'));
     $dompdf=\App::make('dompdf.wrapper');
     $dompdf->loadHTML($vista);
     return $dompdf->stream('ListaOrden.pdf');
}


}
