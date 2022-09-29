<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

//listar todos os produtos
Route::get('/produto', [ProdutoController::class, 'index'])->name('produto.index');

//create
Route::get('/produto/create', [ProdutoController::class, 'create'])->name('produto.create');

//store
Route::post('/produto/create', [ProdutoController::class, 'store'])->name('produto.store');

//edit
Route::get('/produto/{id}/edit', [ProdutoController::class, 'edit'])->name('produto.edit');

//update
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->name('produto.update');

//delete
Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->name('produto.delete');




//exibe um produto
Route::get('/produto/{id}', [ProdutoController::class, 'show']);

Route::get('/produtoupdate', [ProdutoController::class, 'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::get('/categoria', [CategoriaController::class, 'index'])->name('categoria.index');

//create
Route::get('/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');

//store
Route::post('/categoria/create', [CategoriaController::class, 'store'])->name('categoria.store');

//edit
Route::get('/categoria/{id}/edit', [CategoriaController::class, 'edit'])->name('categoria.edit');

//update
Route::put('/categoria/{id}', [CategoriaController::class, 'update'])->name('categoria.update');

//delete
Route::delete('/categoria/{id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');




//create
Route::get('create_cliente', [UserController::class, 'create_cliente'])->name('create_cliente');

//store
Route::post('create_cliente', [UserController::class, 'store_cliente'])->name('store_cliente');




// ------------------- Rotas para user

Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user.index');


Route::get('/user/create_cliente', [UserController::class, 'create'])->middleware(['auth'])->name('user.create');


Route::post('/user/create_cliente', [UserController::class, 'store'])->middleware(['auth'])->name('user.store');

Route::get('/user/{id}/edit_cliente' , [UserController::class, 'edit'])->middleware(['auth'])->name('user.edit_cliente');


Route::put('/user/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('user.update');


Route::get('/user/perfil_cliente', [UserController::class, 'perfil'])->middleware(['auth'])->name('user.perfil_cliente');


Route::get('/user/{id}', [UserController::class, 'show'])->middleware(['auth'])->name('user.show');


Route::delete('/user/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('user.destroy');