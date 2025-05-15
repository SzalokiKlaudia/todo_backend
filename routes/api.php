<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\TevekenysegController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/tevekenysegek', [KategoriaController::class,'index']);
Route::get('/tevekenysegek/kategoria/{id}', [TevekenysegController::class,'show']);//szűrés
Route::post('/tevekenyseg', [TevekenysegController::class,'store']);
Route::delete('/tevekenyseg/{id}', [TevekenysegController::class,'destroy']);
Route::put('/tevekenyseg/{id}', [TevekenysegController::class,'put']);




