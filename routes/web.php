<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProdutoController;

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




//exibe um produto
Route::get('/produto/{id}', [ProdutoController::class, 'show']);
