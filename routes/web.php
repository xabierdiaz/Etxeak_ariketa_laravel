<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertsonaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pertsonak', function () {
    return view('pertsonak');
});

Route::post('/pertsonak', [PertsonaController::class, 'add_pertsona'])->name('pertsonasartu');

Route::get('/pertsonak', [PertsonaController::class, 'show_pertsona']);

Route::delete('/pertsonak/{id}', [PertsonaController::class, 'delete_pertsona'])->name('pertsonaezabatu');