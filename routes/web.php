<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VagaController;

Route::get('/', function () {
    return "WEB!";
});

Route::resource('vagas', VagaController::class)->only([
    'index'
]);


