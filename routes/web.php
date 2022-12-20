<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PertsonaController;
use App\Http\Controllers\EtxeaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pertsonak', function () {
    return view('pertsonak');
});

Route::post('/pertsonak', [PertsonaController::class, 'add_pertsona'])->name('pertsonasartu');

Route::get('/pertsonak', [PertsonaController::class, 'show_pertsona']);

Route::delete('/pertsonak/{id}', [PertsonaController::class, 'delete_pertsona'])->name('pertsonaezabatu');




Route::post('/etxeak', [EtxeaController::class, 'add_etxea'])->name('etxeasartu');

Route::get('/etxeak', [EtxeaController::class, 'show_etxea']);

Route::delete('/etxeak/{id}', [EtxeaController::class, 'delete_etxea'])->name('etxeaezabatu');

Route::get('/etxeak/{id}', [EtxeaController::class , 'aldatuetxea'])->name('etxeak-aldatu');

Route::patch('/etxeak/{id}', [EtxeaController::class , 'aldatuetxeadb'])->name('etxea-aldatu-db');