<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelatorioController;

use App\Http\Controllers\NoticiaController;

use App\Http\Controllers\EsporteController;

use App\Http\Controllers\EventoController;
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

//Route::get('/', function () {return view('noticia.index');});
Auth::routes();

Route::get('/', [NoticiaController::class, 'index']);
Route::resource('relatorios', RelatorioController::class);
Route::resource('noticias', NoticiaController::class);
Route::resource('esportes', EsporteController::class);
Route::resource('eventos', EventoController::class);
Route::get('/contatos', [App\Http\Controllers\HomeController::class, 'contatos'])->name('contatos');
Route::post('/contatos', [App\Http\Controllers\HomeController::class, 'emailContato'])->name('email.contatos');
