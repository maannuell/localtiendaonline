<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\user;
use Auth;




class RegistrousuariosController extends Controller
{
    //

    
   public function register(){
   	return view('registrarse');
   }


public function guardar(Request $datos){

  $nuevo = new User();
  $nuevo->name=$datos->input('name');
  $nuevo->email=$datos->input('email');
  $nuevo->password=bcrypt($datos->input('password'));
  $nuevo->rol=$datos->input('rol');
  

   if($nuevo->save()){

         return back()->with('si','datos Guardados');
       } else {
         return back()->with('no','eror al guardar');
       }


  

}

public function consultar(){

$user = Auth::user();
 
$usuarios=DB::table('users')
->get();


 
 return view('formularios.listadousuarios',compact('user','usuarios'));

}

   
}
