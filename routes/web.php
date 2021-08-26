<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\TextoController;
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

// Rota Inicial - Ambos os caminhos indicam para o mesmo endereço
Route::get('/', [HomeController::class, 'texts']) ->name('home.root');
Route::get('/home', [HomeController::class, 'texts']) ->name('home.root');
Route::get('/about', [HomeController::class, 'about']) ->name('home.about');

// Rotas para criar novo usuário
Route::get('/home/register', [UsuariosController::class, 'create']) ->name('usuarios.create');
Route::post('/home/register', [UsuariosController::class, 'register']) ->name('usuarios.register');

// Rotas para fazer login
Route::get('login', [UsuariosController::class, 'index']) ->name('usuarios.index');
Route::post('login', [UsuariosController::class, 'login']) ->name('usuarios.login');
Route::get('logout', [UsuariosController::class, 'logout']) ->name('usuarios.logout');

// Rota para página temporária
Route::get('/temporary', [UsuariosController::class, 'temporary'])->name('usuarios.temporary');

// Rota para Perfil dos usuários
Route::get('/user', [UsuariosController::class, 'authors']) ->name('usuarios.authors');
Route::get('/user/{id}', [UsuariosController::class, 'view']) ->name('usuarios.profile');

// Rota para editar um perfil
Route::get('user/{user}/edit', [UsuariosController::class, 'editing']) ->name('usuarios.editing');
Route::put('user/{user}/edit', [UsuariosController::class, 'publishing']) ->name('usuarios.publishing');

// Rota para escrever novo texto
Route::get('/new', [TextoController::class, 'writing']) ->name('textos.writing');
Route::post('/new', [TextoController::class, 'posting']) ->name('textos.posting');

// Rota para editar um texto
Route::get('text/{texto}/edit', [TextoController::class, 'editing']) ->name('textos.editing');
Route::put('text/{texto}/edit', [TextoController::class, 'publishing']) ->name('textos.publishing');

// Rota para os textos
Route::get('/text', [TextoController::class, 'texts']) ->name('textos.index');
Route::get('/text/{id_text}', [TextoController::class, 'read']) ->name('textos.info');


// Rota para upload de imagem
Route::post('ckeditor/upload', 'CKEditorController@upload')->name('ckeditor.image-upload');