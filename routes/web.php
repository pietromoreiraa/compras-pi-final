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
Route::resource('/cotacao','CotacaoController');

Route::view('/vue', 'Index.vue');

Auth::routes();

Route::get('/', function() {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

