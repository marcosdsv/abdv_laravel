<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelatorioController;
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
    //return view('welcome');
	return view('inicio');
});
Auth::routes();


Route::resource('relatorios', RelatorioController::class);
Route::get('/contatos', [App\Http\Controllers\HomeController::class, 'contatos'])->name('contatos');
Route::post('/contatos', [App\Http\Controllers\HomeController::class, 'emailContato'])->name('email.contatos');