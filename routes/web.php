<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controlles\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produto',[ProdutoController::class,'index']);