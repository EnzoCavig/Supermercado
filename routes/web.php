<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\ListsController;
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


// Home

Route::get('/', [HomeController::class, 'index'])->name('home');

// Todas as listagens

Route::get('admin', [ListsController::class, 'index'])->name('admin.list');

// Disks

Route::get('produto', [ProdutoController::class, 'index'])->name('produto');
Route::get('categoria/{categoria}', [CategoriaController::class, 'show'])->name('show.produto');
Route::get('admin/produto/create', [ProdutoController::class, 'create'])->name('produto.create');
Route::post('admin/produto/save', [ProdutoController::class, 'store'])->name('produto.store');
Route::get('admin/produto/edit/{produto_id}', [ProdutoController::class, 'edit'])->name('produto.edit');
Route::post('admin/produto/update/{produto_id}', [ProdutoController::class, 'update'])->name('produto.update');
Route::get('admin/produto/delete/{produto_id}', [ProdutoController::class, 'destroy'])->name('produto.delete');

// categoria

Route::get('categoria', [CategoriaController::class, 'index'])->name('categoria');
Route::get('admin/categoria/create', [CategoriaController::class, 'create'])->name('categoria.create');
Route::post('admin/categoria/save', [CategoriaController::class, 'store'])->name('categoria.store');
Route::get('admin/categoria/delete/{categoria_id}', [CategoriaController::class, 'destroy'])->name('categoria.delete');
Route::get('admin/categoria/edit/{categoria_id}', [CategoriaController::class, 'edit'])->name('categoria.edit');
Route::post('admin/categoria/update/{categoria_id}', [CategoriaController::class, 'update'])->name('categoria.update');

// Sales

Route::get('venda', [VendaController::class, 'index'])->name('venda');
Route::post('produto/venda/{produto_id}', [VendaController::class, 'purchase'])->name('produto.purchase');
Route::get('admin/venda/delete/{sales_id}', [VendaController::class, 'destroy'])->name('venda.delete');
