<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\AdminController;

//Route::get('/', function () {
//    return view('welcome');
//});


Route::get('/', [AdminController::class, 'index']);
Route::get('/hello', [AdminController::class, 'hello'])->name('dasboard');
Route::get('/banner', [AdminController::class, 'banner'])->name('banner');
Route::get('/product', [AdminController::class, 'product'])->name('product');
Route::get('/addbanner', [AdminController::class, 'addbanner'])->name('addbanner');
