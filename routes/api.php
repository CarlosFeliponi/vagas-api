<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\VagaController;

Route::get('/', function () {
    return "API";
});

Route::apiResource('vagas', VagaController::class);
