<?php

use App\Http\Controllers\viaCepApi;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\EventController; 

Route::get('/', [EventController::class, 'index']);
Route::get('/api/cep', [ViaCepApi::class, 'apiCep']);