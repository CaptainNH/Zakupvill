<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\BasketController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/products', [MainController::class, 'products'])->name('products');

Route::get('/basket', [BasketController::class, 'basket'])->name('basket');

Route::post('/basket/add/{id}', [BasketController::class, 'basketAdd'])->name('basket-add');

Route::post('/basket/remove/{id}', [BasketController::class, 'basketRemove'])->name('basket-remove');

Route::post('/basket', [BasketController::class, 'basketConfirm'])->name('basket-confirm');

Route::get('/suppliers/{code?}', [MainController::class, 'supplier'])->name('supplier');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'orders'])->name('orders');

Route::get('/order/{id}', [HomeController::class, 'showOrder'])->name('order');

Route::group([
    'prefix' => 'admin'
], function () {
    Route::resource('products', ProductController::class);
    Route::post('change/{order}', [HomeController::class, 'changeOrderStatus'])->name('change-order-status');
});

// Route::get('/admin/products', [HomeController::class, 'products'])->name('auth-products');


Route::get('/product/{id}', [MainController::class, 'showProduct'])->name('product-show');
