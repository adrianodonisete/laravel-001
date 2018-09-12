<?php


Route::get('/', function () {
    return view('index');
});

/*


Route::get('/novocliente', 'ClienteControlador@create');  // 1)

Route::get('/', 'ClienteControlador@index');   // 2)

Route::post('/cliente', 'ClienteControlador@store'); //2)





*/


Route::get('/categorias_index', function () {
    return view('index');
});

Route::get('/categorias', 'ControladorCategoria@index');
Route::get('/categorias/novo', 'ControladorCategoria@create');
Route::post('/categorias', 'ControladorCategoria@store');
Route::get('/categorias/apagar/{id}', 'ControladorCategoria@destroy');
Route::get('/categorias/editar/{id}', 'ControladorCategoria@edit');
Route::post('/categorias/{id}', 'ControladorCategoria@update');

Route::get('/produtos', 'ControladorProduto@indexView');
/*Route::get('/produtos/novo', 'ControladorProduto@create');
Route::post('/produtos', 'ControladorProduto@store');
Route::get('/produtos/apagar/{id}', 'ControladorProduto@destroy');
Route::get('/produtos/editar/{id}', 'ControladorProduto@edit');
Route::post('/produtos/{id}', 'ControladorProduto@update');*/
