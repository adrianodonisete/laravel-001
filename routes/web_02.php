<?php

//use Illuminate\Support\Facades\DB;
use App\Categoria;


Route::get('/', function () {
    return view('index');    
});

 


/*

Route::get('/', function () {
    //return view('pagina');

    $catetoria = Categoria::all();

    //echo 'teste';

    foreach($catetoria as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }
});




Route::get('/inserir/{nome}', function ($nome) {

    $cat = new Categoria();
    $cat->nome = $nome;
    $cat->save();

    return redirect('/');
});


Route::get('/atualizar/{id}/{nome}', function ($id, $nome) {

    $cat = Categoria::find($id);
    $cat->nome = $nome;
    $cat->save();

    return redirect('/');
});

Route::get('/remover/{id}', function ($id) {

    $cat = Categoria::find($id);
    $cat->delete();

    return redirect('/');
});


Route::get('/todas', function () {

    $catetoria = Categoria::withTrashed()->get();


    foreach($catetoria as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, ' ';
        echo $c->trashed() ? '; apagado<br />' : '<br />';
    }
});
*/


/*

Route::get('/categorias', function () {


    $cats = DB::table('categorias')->get();

    foreach($cats as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }

    echo    '<hr />';

    $nomes = DB::table('categorias')->pluck('nome');

    foreach($nomes as $nome) {
        echo 'Nome: ', $nome, '<br /> ';
    }


    echo    '<hr />';

    $cats = DB::table('categorias')->where('id', '2')->get();

    foreach($cats as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }

    echo    '<hr />';

    $cat = DB::table('categorias')->where('id', '4')->first();
    echo 'id: ', $cat->id, '; ';
    echo 'nome: ', $cat->nome, '<br /> ';

    
    echo    '<hr />';
    echo    '<p>Retorna um array utilizando like</p>';

    $cats = DB::table('categorias')->where('nome', 'like', 'p%')->get();

    foreach($cats as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }

    
    echo    '<hr />';
    echo    '<p>Sentenças lógicas</p>';

    $cats = DB::table('categorias')->where('id', 1)->orWhere('id', 2)->get();

    foreach($cats as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }

    echo    '<p>Intervalos</p>';

    $cats = DB::table('categorias')->whereBetween('id', [1,3])->get();

    foreach($cats as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }

    echo    '<p>Sentenças lógicas</p>';
    $cats = DB::table('categorias')->where([
        ['id', 2],
        ['nome', 'Roupas']
    ])->get();

    foreach($cats as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }
    //return view('welcome');
});




Route::get('/novascategorias', function () {
    $id = DB::table('categorias')->insertGetId(
        ['nome' => 'Caminhoes']
    );

    echo "Novo ID: {$id}";
});

Route::get('/atualizandocategorias', function () {
    $cat = DB::table('categorias')->where('id', '4')->first();
    echo '<br />Antes';
    echo 'id: ', $cat->id, '; ';
    echo 'nome: ', $cat->nome, '<br /> ';

    $cat = DB::table('categorias')->where('id', '4')
        ->update(['nome'=>'Roupas infantis']);

    $cat = DB::table('categorias')->where('id', '4')->first();
    echo '<br />Depois';
    echo 'id: ', $cat->id, '; ';
    echo 'nome: ', $cat->nome, '<br /> ';
});



Route::get('/removendocategorias', function () {
    $cats = DB::table('categorias')->get();
    echo '<br />Antes';
    foreach($cats as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }

    $cat = DB::table('categorias')->where('id', '4')->delete();

    $cats = DB::table('categorias')->get();
    echo '<br />Depois';
    foreach($cats as $c) {
        echo 'id: ', $c->id, '; ';
        echo 'nome: ', $c->nome, '<br /> ';
    }
});


*/


/*

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
    
    

        return view('minhaview', 
            compact('nome', 'sobrenome')
        );
});
*/

/*

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




Route::get('/mostraropcoes', 'ProdutoControlador@mostrar_opcoes');
Route::get('/opcoes/{opcao}', 'ProdutoControlador@opcoes');


Route::get('/produtos', 'ProdutoControlador@listar');

Route::get('/secaoprodutos/{palavra}', 'ProdutoControlador@secaoprodutos');



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
