<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::resource('products', 'ProductController')->middleware('auth');

/*
Route::get('/', function () {
    //return view('welcome');
    return 'Laravel';
});
*/

Route::get('/ola', function () {
    //return view('welcome');
    return '<h1>seja bem vindo</h1>';
});


Route::get('/olasejabenvindo', function () {
    return view('welcome');
    //return '<h1>seja bem vindo - olasejabenvindo</h1>';
});


Route::get('/nome/{nome}/{sobrenome}', function ($nome, $sn) {
    return "<h1>seja bem vindo, $nome $sn!</h1>";
});


Route::get('/repetir/{nome}/{n}', function ($nome, $n) {
    for($i = 0; $i< $n;$i++) {
        echo "<h1>seja bem vindo, $nome !</h1><br />";
    }
    return "<h1>fim, $nome $n!</h1>";
});


Route::get('/comregra/{nome}/{n}', function ($nome, $n) {
    for($i = 0; $i< $n;$i++) {
        echo "<h1>seja bem vindo, $nome $i !</h1><br />";
    }
    //return "<h1>fim, $nome $n!</h1>";
})->where('n','[0-9]+')->where('nome', '[A-Za-z]+');



Route::get('/semregra/{nome?}', function ($nome=null) {
    if (isset($nome)) {
        echo "<h1>seja bem vindo, $nome !</h1><br />";
    } else {
        echo 'nada digitado!';
    }
    //return "<h1>fim, $nome $n!</h1>";
});


Route::prefix('app')->group(function () {
        
    Route::get('/', function () {
        return 'home app';
    });
    Route::get('profile', function () {
        return 'profile page';
    });
    Route::get('about', function () {
        return 'about page';
    });
});


Route::redirect('aqui', 'ola', 301);

Route::view('/hello', 'hello');


// 

Route::view(
    '/viewnome', 
    'hellonome', 
    ['nome'=>'joao', 'sn'=> 'silva']
);

Route::get(
    '/hellonome/{nome}/{sn}', 
    function($nome, $sn) {

        return view(
            'hellonome', 
            ['nome'=>$nome, 'sn'=> $sn]
        );
});

Route::get(
    '/hellobrasil/{nome}/{sn}', 
    function($nome, $sn) {
        // retorna a view hellonome
        return view(
            'hellonome', 
            ['nome'=>$nome, 'sn'=> $sn]
        );
});



