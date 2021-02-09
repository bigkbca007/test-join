<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriasController;

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