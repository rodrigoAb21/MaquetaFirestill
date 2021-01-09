<?php

Route::get('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@showLoginForm'
]);
Route::post('login', [
    'as' => '',
    'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::middleware('auth')->group(function () {

    Route::resource('proveedores','ProveedorController');
    Route::resource('personal','PersonalController');
    Route::resource('clientes','ClienteController');
    Route::resource('categorias','CategoriaController');



    Route::get('herramientas/listaPrincipal','HerramientaController@listaPrincipal');
    Route::get('herramientas/listaIngresos','HerramientaController@listaIngresos');
    Route::get('herramientas/nuevoIngreso','HerramientaController@nuevoIngreso');
    Route::get('herramientas/listaBajas','HerramientaController@listaBajas');
    Route::get('herramientas/listaAsignaciones','HerramientaController@listaAsignaciones');
    Route::get('herramientas/nuevaAsignacion','HerramientaController@nuevaAsignacion');


    Route::get('inventario/listaPrincipal','InventarioController@listaPrincipal');
    Route::get('inventario/listaIngresos','InventarioController@listaIngresos');
    Route::get('inventario/nuevoIngreso','InventarioController@nuevoIngreso');
    Route::get('inventario/listaBajas','InventarioController@listaBajas');


    Route::resource('mantenimientos','MantenimientoController');

    Route::resource('ventas','VentaController');

});