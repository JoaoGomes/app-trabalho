<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\UsuariosController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', HomeController::class);

Route::get('produto/inserir', [ProdutoController::class, 'create'])->name('produto.inserir');
Route::get('produto/{id}', [ProdutoController::class, 'view'])->name('produto.descricao');
Route::get('produto/', [ProdutoController::class, 'index'])->name('produto');

Route::post('produto/', [ProdutoController::class, 'insert'])->name('produto.gravar');

Route::get('produto/{prod}/edit', [ProdutoController::class, 'edit'])->name('produto.editar');

Route::put('produto/{produto}/edit', [ProdutoController::class, 'update'])->name('produto.update');

Route::get('produto/{prod}/delete', [ProdutoController::class, 'delete'])->name('produto.deletar');

/* http://localhost:8080/laravel/app-introducao/public/mostrar/teste */
Route::get('mostrar/{algo}', function ($algo) {
    return "Você está vendo $algo.";
});

// Aula 11 - Autenticação
Route::get('login', [UsuariosController::class, 'index']) ->name('usuario.index');
Route::post('login', [UsuariosController::class, 'login']) ->name('usuario.login');
Route::get('logout', [UsuariosController::class, 'logout']) ->name('usuario.logout');