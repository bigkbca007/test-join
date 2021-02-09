<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProdutoController;

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
    return view('layouts.app');
});

// Rotas para categorias
Route::get('/categorias/add', [CategoriasController::class, 'create']);;
Route::post('/categorias/store', [CategoriasController::class, 'store']);
Route::get('/categorias', [CategoriasController::class, 'index']);
Route::get('/categorias/edit/{id}', [CategoriasController::class, 'edit']);
Route::post('/categorias/update/{id}', [CategoriasController::class, 'update']);
Route::delete('/categorias/destroy/{id}', [CategoriasController::class, 'destroy']);

// Rotas para produto
Route::get('/produtos/add', [ProdutoController::class, 'create']);;
Route::post('/produtos/store', [ProdutoController::class, 'store']);
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/edit/{id}', [ProdutoController::class, 'edit']);
Route::post('/produtos/update/{id}', [ProdutoController::class, 'update']);
Route::delete('/produtos/destroy/{id}', [ProdutoController::class, 'destroy']);