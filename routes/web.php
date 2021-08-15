<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
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

//Controladora da Home
Route::get('/', HomeController::class);

// {nome} é um parâmetro passado para a rota
Route::get('produto/inserir', [ProdutoController::class, 'create']);

Route::get('produto/{nome}', [ProdutoController::class, 'view']);

Route::get('produto', [ProdutoController::class, 'index']);