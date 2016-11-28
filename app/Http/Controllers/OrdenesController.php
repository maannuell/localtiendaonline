<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordene;

class OrdenesController extends Controller
{
    //

    public function eliminarcompra($id){
           Ordene::find($id)->delete();
        return Redirect('/');
    }
}
