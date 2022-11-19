<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ArquivoController;
use App\Http\Controllers\ComentarioController;

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

Route::get('/', [SiteController::class, 'index'])->name('marmitaria.index');
Route::get('/contato', [SiteController::class, 'contato'])->name('marmitaria.contato');
Route::get('/produtos', [SiteController::class, 'produtos'])->name('marmitaria.produtos');
Route::get('/promocoes', [SiteController::class, 'promocao'])->name('marmitaria.promocao');
Route::get('/quemsomos', [SiteController::class, 'quemsomos'])->name('marmitaria.quemSomos');


// Rotas do Carrinho
Route::get('/carrinho', [SiteController::class, 'carrinho'])->name('marmitaria.carrinho');
Route::get('/checkout', [SiteController::class, 'checkout'])->name('marmitaria.checkout');

Route::get('/adicionarProduto/{id}', [SiteController::class, 'show'])->name('marmitaria.show');
Route::post('/addProduto', [SiteController::class, 'addProduto'])->name('marmitaria.addProduto');
Route::delete('/removeProduto/{key}',[SiteController::class,'removeProduto'])->name('removeProduto');

Route::post ('/concluirPedido', [SiteController::class, 'concluirPedido'])->name('marmitaria.concluirPedido');
// ---------
Route::get('/dashboard',  [PedidoController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');




//listar todos os produtos
Route::get('/produto' , [ProdutoController::class, 'index'])->middleware(['auth'])->name('produto.index');

Route::get('/produto/create', [ProdutoController::class, 'create'])->middleware(['auth'])->name('produto.create');
Route::post('/produto/create', [ProdutoController::class, 'store'])->middleware(['auth'])->name('produto.store');

Route::get('/produto/{id}',  [ProdutoController::class, 'show'])->middleware(['auth'])->name('produto.show');

Route::get('/produto/{id}/edit' , [ProdutoController::class, 'edit'])->middleware(['auth'])->name('produto.edit');
Route::put('/produto/{id}', [ProdutoController::class, 'update'])->middleware(['auth'])->name('produto.update');

Route::delete('/produto/{id}', [ProdutoController::class, 'destroy'])->middleware(['auth'])->name('produto.destroy');




//exibe um produto
Route::get('/produto/{id}', [ProdutoController::class, 'show'])->name('produto.show');;

//Route::get('/produtoupdate', [ProdutoController::class, 'store']);

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

Route::get('/categoria/{id}', [CategoriaController::class, 'show'])->name('categoria.show');;




//create
Route::get('create_cliente', [UserController::class, 'create_cliente'])->name('create_cliente');
Route::post('create_cliente', [UserController::class, 'store_cliente'])->name('store_cliente');




// ------------------- Rotas para user -------------------

Route::get('/user', [UserController::class, 'index'])->middleware(['auth'])->name('user.index');

Route::get('/user/create', [UserController::class, 'create'])->middleware(['auth'])->name('user.create');
Route::post('/user/create', [UserController::class, 'store'])->middleware(['auth'])->name('user.store');

Route::get('/user/{id}', [UserController::class, 'show'])->middleware(['auth'])->name('user.show');

Route::get('/user/{id}/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('user.edit');
Route::put('/user/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('user.update');

Route::get('/user/perfil_cliente', [UserController::class, 'perfil'])->middleware(['auth'])->name('user.perfil_cliente');


Route::delete('/user/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('user.destroy');

Route::get('self_edit_password', [UserController::class, 'self_edit_password'])->name('self_edit_password')->middleware('auth');
Route::put('self_update_password', [UserController::class, 'self_update_password'])->name('self_update_password')->middleware('auth');



// ------------------- Rotas para pedidos
Route::get('/pedido', [PedidoController::class , 'index'])->name('pedido.index');

Route::get('/pedido/andamento', [PedidoController::class , 'andamento'])->name('pedido.andamento');

Route::get('/pedido/concluidos', [PedidoController::class , 'concluidos'])->name('pedido.concluidos');

Route::get('/pedido/cancelados', [PedidoController::class , 'cancelados'])->name('pedido.cancelados');


Route::get('/pedido/{id}/statusCancelado', [PedidoController::class , 'statusCancelado'])->name('pedido.statusCancelado');

Route::get('/pedido/{id}/statusConcluido', [PedidoController::class , 'statusConcluido'])->name('pedido.statusConcluido');

Route::get('/pedido/{id}/statusAndamento', [PedidoController::class , 'statusAndamento'])->name('pedido.statusAndamento');

Route::get('/pedido/{id}', [PedidoController::class , 'show'])->name('pedido.show');


Route::get('/arquivocreate/{id}', [ArquivoController::class, 'create'])->name('arquivo.create');

Route::post('/arquivocreate', [ArquivoController::class, 'store'])->name('arquivo.store');

Route::delete('arquivocreate/{id}', [ArquivoController::class, 'destroy'])->name('arquivocreate.destroy');


