<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\VagaController;

// Router::resource('vagas', VagaController::class);

Route::get('/vagas', [VagaController::class, 'index']);

