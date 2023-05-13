<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurfistaController;
use App\Http\Controllers\BateriaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\OndaController;


Route::resource('surfistas', SurfistaController::class);
Route::resource('baterias', BateriaController::class);
Route::resource('notas', NotaController::class);
Route::resource('ondas', OndaController::class);
