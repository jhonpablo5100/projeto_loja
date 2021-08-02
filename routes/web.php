<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller_Produtos\Cadastros;

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

Route::get('/', function () {
    return view('home');
});
Route::get('/formulario',[Cadastros::class,'formulario_produtos'])->name('formulario.formulario_produtos')->middleware('auth');
Route::post('/cadastrar',[Cadastros::class,'cadastrar_produtos'])->name('cadastrar.cadastrar_produtos')->middleware('auth');
Route::get('/registros',[Cadastros::class,'ver_registros'])->name('registros.ver_registros')->middleware('auth');
Route::delete('/deletar/{id}',[Cadastros::class,'deletar_produto'])->name('deletar.deletar_produto')->middleware('auth');
Route::get('/detalhe/{id}',[Cadastros::class,'detalhe_produto'])->name('detalhe.detalhe_produto')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
