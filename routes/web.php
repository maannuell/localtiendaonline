<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('productos');
});
//mostrar vistas 
Route::get('/categorias', 'FormulariosController@categorias');
Route::get('/subcategorias', 'FormulariosController@subcategorias');
Route::get('/articulos', 'FormulariosController@articulos');
Route::get('/marcas','FormulariosController@marcas');

//guardar
Route::post('/guardarCategoria','CategoriasController@guardar');
Route::post('/guardarMarca','MarcasController@guardar');
Route::post('/guardarSubcategoria','SubcategoriaController@guardar');
Route::post('/guardarArticulo','ArticuloController@guardar');


Route::get('/sele/{id}','ArticuloController@drop');
