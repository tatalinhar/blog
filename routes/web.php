<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controlles\ProdutoController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto',[ProdutoController::class,'index']);Route::get('/produto', [ProdutoController::class,'index']);