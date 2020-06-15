<?php


use Illuminate\Support\Facades\Route;
use App\Models\ModelSolicitacao;
use Illuminate\Support\Facades\DB;

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



Route::resource('/produtos','ProdutoController');
Route::resource('/fornecedor','FornecedorController');
Route::resource('/solicitacao','SolicitacaoController');



Auth::routes();

Route::get('/', function() {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('search/{id}', function($id){
    $solicitacao = ModelSolicitacao::find($id);

    $produto = DB::table('produto')->where('name','like','%'.$solicitacao->name.'%')->paginate(5);
    return view('prodCotacao',compact('produto','solicitacao'));
});
