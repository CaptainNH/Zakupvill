<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'main'])->name('main');

Route::get('/contacts', [MainController::class, 'contacts'])->name('contacts');

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');

Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');

Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');

Route::get('/suppliers/{code?}', [MainController::class, 'supplier'])->name('supplier');
