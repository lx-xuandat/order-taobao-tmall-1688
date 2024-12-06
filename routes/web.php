<?php

use App\Http\Controllers\CartsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::group(['as' => 'fe.', 'middleware' => 'auth'], function () {
    Route::get('carts', [CartsController::class, 'index'])->name('cart.index');
    Route::put('e-commerce/cart-links', [CartsController::class, 'updateCartLink'])->name('cart.update-cart-link');
});


Route::group(['prefix'=> 'extensions', 'as'=> 'extensions', 'middleware' => ['auth']], function () {
    Route::get('get-yuan', [ServicesController::class, 'getYuanExRate'])->name('get-yuan');
    Route::post('add-to-cart', [CartsController::class, 'addToCart'])->name('add-to-cart');
});
