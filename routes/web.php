<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi', [HomeController::class, 'index']);
Route::get('/clients', [ClientController::class, 'index'])->name('client.index');
Route::get('/clients/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/clients/save', [ClientController::class, 'save'])->name('client.save');
Route::get('/clients/{id}', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/clients/{id}', [ClientController::class, 'update'])->name('client.update');
