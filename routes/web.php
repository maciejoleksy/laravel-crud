<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

Route::get('/', [ClientController::class, 'index'])->name('index');
Route::get('create', [ClientController::class, 'create'])->name('create');
Route::post('store', [ClientController::class, 'store'])->name('store');
Route::get('edit/{client:uuid}', [ClientController::class, 'edit'])->name('edit');
Route::post('update/{client:uuid}', [ClientController::class, 'update'])->name('update');
Route::delete('delete/{client:uuid}', [ClientController::class, 'delete'])->name('delete');