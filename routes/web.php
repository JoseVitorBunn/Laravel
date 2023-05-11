<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contato', [HomeController::class, 'contato'])->name('contato');
Route::post('/enviar-contato', [HomeController::class, 'enviarContato'])->name('enviar.contato');
Route::get('/resultado', [HomeController::class, 'resultado'])->name('resultado');