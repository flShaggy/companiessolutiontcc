<?php

use Illuminate\Support\Facades\Route;

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


Route:: get ('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index4');
    Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');
    Route::get('/compra', 'App\Http\Controllers\CompraController@compra')->name('site.compra');
    Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
    Route::get('/login', 'App\Http\Controllers\LoginController@login')->name('site.inicio');
    Route::post('/contato', 'App\Http\Controllers\ContatoController@salvar')->name('site.contato');
    Route::get('/inicio', 'App\Http\Controllers\inicioController@inicio')->name('site.inicio');
    Route::get('/login', function(){return 'Login';})->name('site.login');
    

    Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores','FornecedorController@index')->name('app.fornecedorwes');
    Route::get('/produtos', function(){return 'Produtos';})->name('app.produtos');
    Route::get('/venda', function(){return 'venda';})->name('app.venda');
});


Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.rota1');

/*
Route::fallaback(function (){
    echo 'página não encontrado, por favor <a href="'.route(site.index).'">clique aqui</a> para ser redirecionado';
});

*/

// nome, categoria para envio de informações


/*
--------> Rotas para testas parâmetros de envio


Route::get('/contato/{nome}/{categoria_id}', 
    function(
        string $nome = 'Desconhecido', 
        int $categoria_id = 1 // 1 - 'Informação'
        ){
    echo "Estamos aqui: $nome - $categoria_id ";
}
)->where('categoria_id','[0-9]+')
 ->where('nome','[A-Za-z]+');
 */