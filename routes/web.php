<?php

use App\Http\Controllers\viaCepApi;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController; 
use App\Http\Controllers\LojasController;

Route::get('/', [EventController::class, 'index']);
Route::get('/lojas', [EventController::class, 'store']);
Route::get('/api/cep', [ViaCepApi::class, 'apiCep']);
Route::get('/lojas', function() {
    return redirect()->route('lojas.show', ['estado' => 'Amazonas']);
});

Route::get('/lojas/{estado}', [LojasController::class, 'show'])->name('lojas.show');