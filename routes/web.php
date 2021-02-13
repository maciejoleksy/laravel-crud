<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::resource('/', ClientController::class);
Route::post('/store', [ClientController::class, 'store'])->name('store');
Route::delete('/store/{client}', [ClientController::class, 'destroy'])->name('destroy');
Route::get('/store/{client}', [ClientController::class, 'edit'])->name('edit');