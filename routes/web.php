<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/items', [App\Http\Controllers\ItemssController::class, 'index'])->name('items.index');
Route::post('/items/store', [App\Http\Controllers\ItemssController::class, 'store'])->name('items.store');
Route::post('/items/delete/{id}', [App\Http\Controllers\ItemssController::class, 'destroy'])->name('items.destroy');
