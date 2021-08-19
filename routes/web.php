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

// Rota Inicial
Route::get('/', HomeController::class);
Route::get('/home', [HomeController::class, 'root']) ->name('home.root');

// Rotas para criar novo usuário
Route::get('/home/register', [UsuariosController::class, 'create']) ->name('usuarios.create');
Route::post('/home/register', [UsuariosController::class, 'register']) ->name('usuarios.register');

// Rotas para cadastrar novo produto - VAI SAIR
Route::get('produto/inserir', [ProdutoController::class, 'create'])->name('produto.inserir');
Route::get('produto/{id}', [ProdutoController::class, 'view'])->name('produto.descricao');
Route::get('produto/', [ProdutoController::class, 'index'])->name('produto');
Route::post('produto/', [ProdutoController::class, 'insert'])->name('produto.gravar');
Route::get('produto/{prod}/edit', [ProdutoController::class, 'edit'])->name('produto.editar');
Route::put('produto/{produto}/edit', [ProdutoController::class, 'update'])->name('produto.update');
Route::get('produto/{prod}/delete', [ProdutoController::class, 'delete'])->name('produto.deletar');

// Rotas para fazer login
Route::get('login', [UsuariosController::class, 'index']) ->name('usuarios.index');
Route::post('login', [UsuariosController::class, 'login']) ->name('usuarios.login');
Route::get('logout', [UsuariosController::class, 'logout']) ->name('usuarios.logout');