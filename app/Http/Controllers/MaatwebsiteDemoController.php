<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Articulo;
class MaatwebsiteDemoController extends Controller
{
    //

    public function importExcel(Request $request)
	{

		if($request->hasFile('import_file')){
			$path = $request->file('import_file')->getRealPath();

			$data = Excel::load($path, function($reader) {})->get();

			if(!empty($data) && $data->count()){

				foreach ($data->toArray() as $key => $value) {
					if(!empty($value)){
						foreach ($value as $v) {		
							$insert[] = ['nombre' => $v['nombre'], 'descripcion' => $v['descripcion'], 'precio' => $v['precio'], 'id_subcategoria' => $v['id_subcategoria'], 'id_marca' => $v['id_marca'], 'imagen' => $v['imagen'], 'existencia' => $v['existencia'], 'promo' => $v['promo'], 'visitas' => $v['visitas']];
						}
					}
				}

				
				if(!empty($insert)){
					Articulo::insert($insert);
					return back()->with('success','Insercion masiva superada.');
				}

			}

		}

		return back()->with('error','error favor de checar los campos del documento');
	}


}
