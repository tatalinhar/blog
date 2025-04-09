<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto', [ProdutoController::class,'index'])->name('home');
Route::get('/categorias', [CategoriaController::class,'index'])->name('categoria.index');