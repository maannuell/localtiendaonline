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

Route::get('/','FormulariosController@index');     
<<<<<<< HEAD
Route::get('/ircarrito','FormulariosController@ircar');
=======

>>>>>>> origin/master

//registrarse
Route::get('/registrarse','RegistrousuariosController@register');
Route::post('/guardarusuario','RegistrousuariosController@guardar');
Route::get('/consultausuario','RegistrousuariosController@consultar');


Route::get('/administrador','FormulariosController@admi');
//mostrar vistas
Route::get('/altausuarios','FormulariosController@usuarios'); 
Route::get('/categorias', 'FormulariosController@categorias');
Route::get('/subcategorias', 'FormulariosController@subcategorias');
Route::get('/articulos', 'FormulariosController@articulos');
Route::get('/marcas','FormulariosController@marcas');
//comentarios guardar
Route::post('guardacomentario/{id}','ArticuloController@comentarioguarda');
//guardar
Route::post('/guardarCategoria','CategoriasController@guardar');
Route::post('/guardarMarca','MarcasController@guardar');
Route::post('/guardarSubcategoria','SubcategoriaController@guardar');
Route::post('/guardarArticulo','ArticuloController@guardar');

Route::get('/verproductos/{id}','ArticuloController@ver');
Route::get('/detaproducto/{id}','ArticuloController@detaver');

Route::get('/sele/{id}','ArticuloController@drop');

Auth::routes();

Route::get('/home', 'HomeController@index');
//importar excel

Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
Route::get('/excel', 'FormulariosController@excel');


//consultas admin 
Route::get('/consultacomentario','ComentarioController@consultar');
Route::get('/eliminarcomentario/{id}','ComentarioController@eliminar');
//vista inventario
Route::get('/consultainventario','ArticuloController@coninventario');
//agregar inventario
Route::post('/agregarinventario/{id}','ArticuloController@agregainventario');

//carrito 
Route::get('/agregarcarrito/{id}','ArticuloController@carritocompras');
//en detalle
Route::get('/agregarcarrdetalle/{id}','ArticuloController@acarritodetalle');
//borrar del carrito
Route::get('/eliminarcarrito/{id}','OrdenesController@eliminarcompra');