<?php



////////////////////////////////////////////////////////////////
// Basico de Rotas

Route::get('/', function () {
    return view('pagina');
});

Route::get('/ola/sejabemvindo', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World!';
});



Route::get('/primeiraview', function() {
    return view('minhaview');
});


Route::get('/ola', function() {
    return view('minhaview')
        ->with('nome', 'João')
        ->with('sobrenome', 'Silva');
});

Route::get('/ola/{nome}/{sobrenome}', function($nome, $sobrenome) {
    /*return view('minhaview')
        ->with('nome', $nome)
        ->with('sobrenome', $sobrenome);
        */
        
        /*return view('minhaview', 
            ['nome' => $nome, 'sobrenome'=> $sobrenome]
        );*/

        return view('minhaview', 
            compact('nome', 'sobrenome')
        );
});


Route::get('/email/{email}', function($email) {
    if (View::exists('email')) {
        return view('email', compact('email'));
    } else {
        return view('erro');
    }
});


Route::get('/filho', function() {
    return view('filho');
});



Route::get('/produtos', 'ProdutoControlador@listar');

Route::get('/secaoprodutos/{palavra}', 'ProdutoControlador@secaoprodutos');


/*


Route::get('/nome', 'MeuControlador@getNome');

Route::get('/idade', 'MeuControlador@getIdade');

Route::get('/multiplicar/{n1}/{n2}', 'MeuControlador@multiplicar');

Route::get('/nomes/{id}', 'MeuControlador@getNomeByID');

Route::resource('/cliente', 'ClienteControlador');

*/


/*

////////////////////////////////////////////////////////////////
// Utilizando outros metodos do HTTP

// Editar: app/Http/Middleware/VerifyCsrfToken.php

Route::get('/hello1', function () {
    return 'Hello World1 (GET)';
});

Route::post('/hello1', function () {
    return 'Hello World1 (POST)';
});

Route::delete('/hello1', function () {
    return 'Hello World1 (DELETE)';
});

Route::put('/hello1', function () {
    return 'Hello World1 (PUT)';
});

Route::patch('/hello1', function () {
    return 'Hello World1 (PATCH)';
});

Route::options('/hello1', function () {
    return 'Hello World1 (OPTIONS)';
});

////////////////////////////////////////////////////////////////

// use Illuminate\Http\Request;

// Atendendo varios metodos em uma unica regra
Route::match(['get', 'post'], '/hello2', function () {
    return 'Hello World 2';
});

Route::any('/qualquer', function () {
    return 'Hello World 3';
});

////////////////////////////////////////////////////////////////
// Redirecionamento de rotas

Route::redirect('/aqui', '/hello', 301);

// Rotas diretas para Views

Route::view('/minhaview', 'hello');

Route::view('/olajoao', 'hellonome', ['nome'=>'Joao', 'sobrenome'=>'Silva'] );

Route::get('/olanome/{nome}/{sobrenome}', function($nome, $sobrenome){
    return view('hellonome', ['nome'=>$nome, 'sobrenome'=>$sobrenome] );
});

////////////////////////////////////////////////////////////////
// Passagem de parâmetros 

// Parametros obrigatórios

// Passagem de um parâmetro 
Route::get('/nome/{nome}', function ($nome) {
    return "<h1>Ola, $nome!</h1>";
});

// Passagem de mais de um parâmetro 
Route::get('/nome/{nome}/{n}', function ($nome, $n) {
    $s = ''; 
    for ($i=0;$i<$n;$i++)
        $s .= "<h1>Ola, $nome!</h1>";
    echo $s; 
});

// Parametros opcionais
Route::get('/seunome/{nome?}', function ($nome=null) {
    if (isset($nome))
        return "<h1>Ola, $nome!</h1>";
    return "<h1>Voce nao digitou nenhum nome.</h1>";
});

// Regras para Parametros

Route::get('/seunomecomregra/{nome}/{n}', function ($nome, $n) {
    $s = ''; 
    for ($i=0;$i<$n;$i++)
        $s .= "<h1>Ola, $nome!</h1>";
    echo $s; 
})->where('nome', '[A-Za-z]+')->where('n','[0-9]+');


////////////////////////////////////////////////////////////////
// Agrupamento de Rotas


Route::prefix('app')->group(function () {
    Route::get('/', function () {
        return 'Meu app';
    });

    Route::get('profile', function () {
        return 'Profile do meu App';
    });
});

/////////////////////////////////////
// Nomeando Rotas


Route::get('/produtos', function () {
    echo "<h1>Produtos</h1>";
    echo "<ol>";
    echo "<li>Notebook </li>";
    echo "<li>Impressora </li>";
    echo "<li>Mouse </li>";
    echo "</ol>";
})->name('meusprodutos');


Route::get('/linkprodutos', function () {
    $url = route('meusprodutos');
    echo "<a href=\"" . $url . "\">Meus Produtos</a>"; 
});

Route::get('/redirecionarprodutos', function () {
    return redirect()->route('meusprodutos');
});


*/
