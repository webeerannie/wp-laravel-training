<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', [HomeController::class, 'index']);
Route::get('/client', [ClientController::class, 'index'])->name('client.index');
